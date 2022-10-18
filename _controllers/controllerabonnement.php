<?php
session_start();
include "../_class/config.php";
include "../_constantes/constantes.php";
include "../_functions/functions.php";

spl_autoload_register(function ($class) {
    include "../_class/" . $class . ".php";
});

function abonnement()
{

    if (!isset($_SESSION['Iduser'])) {

        echo json_encode(["message" => "vous pouviez pas car vous n'etes pas connecté,merci de vous connecte", "status" => "error"]);
    }

    if (isset($_SESSION['Iduser'])) {

        if ($_POST['idmagasin']) {
            $abonnement = new abonnement;
            $abonnement->id_user = $_SESSION['Iduser'];
            $abonnement->id_magasin = $_POST["idmagasin"];

            if ($abonnement->add()) {
                echo json_encode(["message" => "vous etes abonnée ", "success" => "error"]);
            }
        }
    }
}
function desabonnement()
{
    if (!isset($_SESSION['Iduser'])) {

        echo json_encode(["message" => "vous pouviez pas car vous n'etes pas connecté,merci de vous connecte", "status" => "error"]);
    }

    if (isset($_SESSION['Iduser'])) {

        if ($_POST['idmagasin']) {
            $abonnement = new abonnement;
            //$idmagasin = $_POST["idmagasin"];
            $id = $abonnement::magasinid($_SESSION['Iduser'], $_POST['idmagasin']);

            if ($abonnement->delete($id['id'])) {
                echo json_encode(["message" => "vous etes abonnée desabonné ", "success" => "error"]);
            } else {
                echo json_encode(["message" => "not found ", "error" => "error"]);
            }
        }
    }
}



if (function_exists($_GET['function']())) {

    $_GET['function']();
} else {
    //routes::index();
}
