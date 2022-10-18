<?php
#Genéré par GeneratorClassV4.0.0 le 11-11-2021 à 01:04:48

session_start();
include "../_class/config.php";
include "../_constantes/constantes.php";
include "../_functions/functions.php";

spl_autoload_register(function ($class) {
    include "../_class/" . $class . ".php";
});

extract($_GET);

function add_marche()
{

    $requireds = [];
    $marche = new marche;

    $marche->nom_marche = $_POST["nommarche"];
    $marche->commune = $_POST["nomcommune"];
    $marche->ville = $_POST["nomville"];
    $marche->createur = "rock";
    $marche->datecreation = date("d/m/y");



    if ($marche->add()) {

        echo json_encode(["message" => "Ajout éffectué avec succès", "status" => "success"]);
    } else {

        echo json_encode(["message" => "Echec de l'ajout veuillez réessayer", "status" => "error"]);
    }
}

function update_marche()
{

    $requireds = [];

    if (count(required($_POST, $requireds)) == 0) {

        $marche = marche::find($_POST["id"]);

        $marche->nom_marche = $_POST["nommarche"];
        $marche->ville = $_POST["nomville"];
        $marche->commune = $_POST["nomcommune"];
        $marche->localisation = "rock";
        $marche->datecreation = date("d/m/y");




        if ($marche->update()) {

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

function delete_marche()
{

    $id = $_GET["id"];

    if (!isset($id))
        routes::index();

    if (marche::delete($id)) {

        echo json_encode(["message" => "Suppresion éffectué avec succès", "status" => "success"]);
    } else {

        echo json_encode(["message" => "Echec de la suppression", "status" => "error"]);
    }
}

if ($_POST['object'] = "add") add_marche();
if ($_POST['object'] = "update") update_marche();
if ($_POST['object'] = "delete") delete_marche();
if ($_POST['oject'] = '') routes::index();
