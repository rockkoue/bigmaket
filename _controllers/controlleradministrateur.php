<?php
session_start();
include "../_class/config.php";
include "../_constantes/constantes.php";
include "../_functions/functions.php";

spl_autoload_register(function ($class) {
    include "../_class/" . $class . ".php";
});

extract($_GET);


function add_administrateur()
{

    $requireds = ['nom', 'prenom', 'login', 'code_compte'];

    $administrateur = new administrateur;

    //$avatar = UploadFile('avatar', '_files/avatar/');

    //if ($avatar == false)

    $avatar = 'https://www.pngitem.com/pimgs/m/473-4733687_male-computer-user-user-computer-png-transparent-png.png';

    $administrateur->nom = $_POST["nom"];
    $administrateur->prenom = $_POST["prenom"];
    $administrateur->avatar = $avatar;
    $administrateur->login = $_POST["login"];
    $administrateur->code_compte = hash('ripemd160', $_POST["code_compte"]);
    $administrateur->date_ajout = date('Y-m-d');
    //$administrateur->admin_ajout = $_SESSION['IdAdministrateur'];


    if ($administrateur->add()) {

        echo json_encode(["message" => "Ajout éffectué avec succès", "status" => "success"]);
    } else {

        echo json_encode(["message" => "Echec de l'ajout veuillez réessayer", "status" => "error"]);
    }
}


function delete_administrateur()
{

    $id = $_GET["id"];

    if (!isset($id))
        ///
        if (administrateur::delete($id)) {

            echo json_encode(["message" => "Suppresion éffectué avec succès", "status" => "success"]);
        } else {

            echo json_encode(["message" => "Echec de la suppression", "status" => "error"]);
        }
}



function connexion_administrateur()
{

    $requireds = ['login', 'code_compte'];

    if (count(required($_POST, $requireds)) == 0) {

        $_id = administrateur::connexion($_POST['login'], $_POST['code_compte']);

        if ($_id) {

            $_SESSION['IdAdministrateur'] = $_id;
            echo json_encode(["message" => "Connexion éffectué avec succès", "status" => "success"]);
        } else {

            echo json_encode(["message" => "Echec de la connexion", "status" => "error"]);
        }
    } else {
        echo json_encode(["message" => "Veuillez saisir tous les champs obligatoires", "status" => "error", "fields" => required($_POST, $requireds)]);
    }
}

function deconnexion_administrateur()
{

    if (administrateur::deconnexion()) {

        header('location:login');
    }
}

if ($_POST['object'] = "connexion") connexion_administrateur();
