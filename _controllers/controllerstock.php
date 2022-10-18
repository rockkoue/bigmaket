<?php
session_start();
include "../_class/config.php";
include "../_constantes/constantes.php";
include "../_functions/functions.php";

spl_autoload_register(function ($class) {
    include "../_class/" . $class . ".php";
});

extract($_GET);

function add_stock()
{
    $stockage = new stock;
    $stockage->article = $_POST["article"];
    $stockage->magasin = $_POST["id"];
    $stockage->prix = $_POST["prix"];
    $stockage->quantite = $_POST["quantite"];
    $stockage->date_stockage = "1/01/2022";


    if ($stockage->add()) {

        echo json_encode(["message" => "stock creer  avec succès", "status" => "success"]);
    } else {

        echo json_encode(["message" => "Echec de l'ajout veuillez réessayer", "status" => "error"]);
    }
}


function delete_stock()
{
    $id = $_GET["id"];

    if (!isset($id))
        routes::index();

    if (stock::delete($id)) {

        echo json_encode(["message" => "Suppresion éffectué avec succès", "status" => "success"]);
    } else {

        echo json_encode(["message" => "Echec de la suppression", "status" => "error"]);
    }
}
if ($_POST['object'] = 'add') {
    add_stock();
} elseif ($_POST['object'] = 'modify') {
    update_stock();
} elseif ($_POST['object'] = 'delete') {
    delete_stock();
}
