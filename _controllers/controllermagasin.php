<?php
session_start();
include "../_class/config.php";
include "../_constantes/constantes.php";
include "../_functions/functions.php";

spl_autoload_register(function ($class) {
    include "../_class/" . $class . ".php";
});

extract($_GET);

function add_magasin()
{
    $magasin = new magasin;
    $magasin->nommagasin = $_POST["nommagasin"];
    $magasin->vendeur = "1";
    $magasin->lieu = $_POST["localisation"];
    $magasin->marche = $_POST["nommarche"];
    $magasin->numeroderegiste = $_POST["numeroderegiste"];
    $magasin->datecreation = "1/01/2022";
    $magasin->statut = 505;

    if ($magasin->add()) {

        echo json_encode(["message" => "magasin creer  avec succès", "status" => "success"]);
    } else {

        echo json_encode(["message" => "Echec de l'ajout veuillez réessayer", "status" => "error"]);
    }
}

function recherche_magasin()
{
    var_dump($_POST[]);
}


if ($_POST['object'] = 'add') {
    add_magasin();
}
