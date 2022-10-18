<?php
session_start();
include "../_class/config.php";
include "../_constantes/constantes.php";
include "../_functions/functions.php";

spl_autoload_register(function ($class) {
    include "../_class/" . $class . ".php";
});

extract($_GET);

function add_categorie()
{

    $requireds = [];


    $categorie = new categorie;

    $categorie->libellecategorie = $_POST["nom"];
    $categorie->datecreation = date("d/m/y");
    //$categorie->iduser = $_POST["iduser"];
    //$categorie->imagecategorie = $_POST["imagecategorie"];


    if ($categorie->add()) {

        echo json_encode(["message" => "Ajout éffectué avec succès", "status" => "success"]);
    } else {

        echo json_encode(["message" => "Echec de l'ajout veuillez réessayer", "status" => "error"]);
    }
}

function update_categorie()
{

    $requireds = [];

    if (count(required($_POST, $requireds)) == 0) {

        $categorie = categorie::find($_POST["id"]);

        $categorie->idcategorie = $_POST["idcategorie"];
        $categorie->libellecategorie = $_POST["libellecategorie"];
        $categorie->datecreation = $_POST["datecreation"];
        $categorie->iduser = $_POST["iduser"];
        $categorie->imagecategorie = $_POST["imagecategorie"];


        if ($categorie->update()) {

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

function delete_categorie()
{

    $id = $_GET["id"];

    if (!isset($id))
        routes::index();

    if (categorie::delete($id)) {

        echo json_encode(["message" => "Suppresion éffectué avec succès", "status" => "success"]);
    } else {

        echo json_encode(["message" => "Echec de la suppression", "status" => "error"]);
    }
}

if ($_POST['object'] = "add") add_categorie();
if ($_POST['object'] = "update") update_categorie();
if ($_POST['object'] = "delete") delete_categorie();
if ($_POST['oject'] = '') routes::index();
