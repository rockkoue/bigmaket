<?php
#Genéré par GeneratorClassV4.0.0 le 16-11-2021 à 16:36:14

session_start();
include "../_class/config.php";
include "../_constantes/constantes.php";
include "../_functions/functions.php";

spl_autoload_register(function ($class) {
    include "../_class/" . $class . ".php";
});

extract($_GET);

function add_ville()
{

    $requireds = [];


    $ville = new ville;

    $ville->nom_ville = $_POST["nom"];


    if ($ville->add()) {

        echo json_encode(["message" => "Ajout éffectué avec succès", "status" => "success"]);
    } else {

        echo json_encode(["message" => "Echec de l'ajout veuillez réessayer", "status" => "error"]);
    }
}



function VilleMagasin()
{
    if (isset($_POST['ville_magasin'])) {
        global $db;

        $query = "SELECT * FROM commune where ville=" . $_POST['ville_magasin'];
        $result = $db->query($query);
        if ($result >= 1) {
            echo ' <option class="hidden" selected disabled>  la Commune où est située votre magasin * </option>';
            foreach ($result->fetchAll(PDO::FETCH_ASSOC) as $row) {
                echo '<option value=' . $row['id'] . '>' . $row['nom_commune'] . '</option>';
            }
        } else {

            echo '<option>No State Found!</option>';
        }
    }
}
function update_ville()
{

    $requireds = [];

    if (count(required($_POST, $requireds)) == 0) {

        $ville = ville::find($_POST["id"]);

        $ville->nom_ville = $_POST["nom_ville"];


        if ($ville->update()) {

            echo json_encode(["message" => "Mofdification éffectué avec succès", "status" => "success"]);
        } else {

            echo json_encode(["message" => "Echec de la mofdification veuillez réessayer", "status" => "error"]);
        }
    } else {
        echo json_encode(
            ["message" => "Veuillez saisir tous les champs obligatoires", "status" => "error", "fields" => required($_POST, $requireds)]
        );
    }
}

function delete_ville()
{

    $id = $_GET["id"];

    if (!isset($id))
        // routes::index();

        if (ville::delete($id)) {

            echo json_encode(["message" => "Suppresion éffectué avec succès", "status" => "success"]);
        } else {

            echo json_encode(["message" => "Echec de la suppression", "status" => "error"]);
        }
}
if (function_exists($_GET['function']())) {

    $_GET['function']();
} else {
    //routes::index();
}
