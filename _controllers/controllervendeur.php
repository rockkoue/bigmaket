<?php
session_start();
include "../_class/config.php";
include "../_constantes/constantes.php";
include "../_functions/functions.php";

spl_autoload_register(function ($class) {
    include "../_class/" . $class . ".php";
});


function add_vendeur()
{
    $requireds = [];
    if (count(required($_POST, $requireds)) == 0) {

        /*  $vendeur = new vendeur;
        $imagevendeur = UploadFile('Identite', '_files/avatar/vendeur/');
        if ($imagevendeur == false) $imagevendeur = '_files/avatar/vendeur/default.jpg';
        $logomagasin = UploadFile('logomagasin', '_files/magasin/');
        if ($logomagasin == false) $logomagasin = '_files/magasin/defaultma.jpg';
         */
        $vendeur = new vendeur;
        $Identite = UploadFile('Identite', '_files/avatar/vendeur/');
        // if ($Identite == false) $Identite = '_files/avatar/vendeur/default.jpg';
        $Idmagasin = UploadFile('Idmagasin', '_files/magasin/');
        //if ($Idmagasin == false) $Idmagasin = '_files/magasin/defaultma.jpg';

        $nom = $vendeur->nom = $_POST["nom"];
        //$vendeur->avatar = $Identite;docidentite
        $Identite = $vendeur->docidentite = $Identite;
        $prenom = $vendeur->prenom = $_POST["prenom"];
        $registeremail = $vendeur->email = $_POST["email"];
        $genre = $vendeur->genre = $_POST["genre"];
        //$vendeur->ville = $_POST["ville"];
        // $pays = $vendeur->pays = $_POST["pays"];
        //$vendeur->registe = $_POST["registe"];
        $telephone = $vendeur->telephone = $_POST["telephone"];
        $mdp = $vendeur->password = hash('ripemd160', $_POST["mdp"]);
        $villemagasin = $vendeur->ville_magasin = $_POST["ville_magasin"];
        $communemagasin = $vendeur->commune_magasin = $_POST["commune_magasin"];
        $nommagasin = $vendeur->nom_magasin = $_POST["nom_magasin"];
        $marche_magasin = $vendeur->marche_magasin = $_POST["marche_magasin"];
        $vendeur->docmagasin = $Idmagasin;
        $vendeur->status = 1;
        $access = $vendeur->access = md5(rand());
        $message = "votre inscrition en cours de traitement merci de l'activé";

        if ($nom == '' || $prenom == '' || $registeremail == '' || $genre == ''  || $telephone == '' || $mdp == '' || $villemagasin == '' || $communemagasin == '' || $nommagasin == '' || $marche_magasin == '') {

            echo json_encode(
                ["message" => "Veuillez remplir tous les champs.", "status" => "error"]
            );
        } else {

            if ($Identite == false || $Idmagasin == false) {
                echo json_encode(
                    ["message" => "Veuillez telecharger vos ducument SVP.", "status" => "error"]
                );
            } else {
                if ($vendeur->add()) {
                    $vendeur->EnvoieMailcreationdecompte($registeremail, $message, $access);

                    // $notifcation->EnnvoiNewAccount()

                    echo json_encode(["message" => "compte sera en verification", "status" => "success"]);
                }
            }
        }
    } else {
        echo json_encode(
            ["message" => "Veuillez saisir tous les champs sobligatoires", "status" => "error", "fields" => required($_POST, $requireds)]
        );
    }
}

function update_vendeur()
{

    $requireds = [];
    if (count(required($_POST, $requireds)) == 0) {

        $vendeur = vendeur::find($_GET["id"]);
        $avatarvendeur = UploadFile('avatarvendeur', '../_files/vendeur/');

        if ($avatarvendeur == false) $avatarvendeur = '../_files/vendeur/default.png';
        $vendeur->nomvendeur = $_POST["nomvendeur"];
        $vendeur->prenomvendeur = $_POST["prenomvendeur"];
        $vendeur->avatarvendeur = $avatarvendeur;
        $vendeur->refajouteur = $_SESSION['Idvendeur'];
        $vendeur->datenaisvendeur = $_POST["datenaisvendeur"];
        //$vendeur->active = 1;

        if ($vendeur->update()) {

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

function validationacount()
{

    if (isset($_GET['idvendeur'])) {
        global $db;

        $validation = (int)$_GET['idvendeur'];
        $stmt = $db->prepare("SELECT * FROM vendeur WHERE id=$validation");
        $stmt->execute(['validation' => $validation]);
        $val = $stmt->fetchAll();

        if ($stmt->rowCount() > 0) {

            $query = "UPDATE  vendeur SET status=0 WHERE id='$validation' ";
            $resultats = $db->query($query);
            if ($resultats) {
                header('Location: http://adompoi7.beget.tech/administrator/vendeur.php');
                exit;
            } else {
                $mess = "<div class='alert alert-sucess'>vendeur non connu</div>";
            }
        } else {
            $mess = "<div class='alert alert-sucess'>vendeur non connu</div>";
        }
    }
}

function unvalidationacount()
{
    if (isset($_GET['idvendeur'])) {
        global $db;

        $validation = $_GET['idvendeur'];

        $stmt = $db->prepare("SELECT * FROM vendeur WHERE id=:validation");
        $stmt->execute(['validation' => $validation]);
        $val = $stmt->fetchAll();

        if ($stmt->rowCount() > 0) {

            $query = "UPDATE  vendeur SET status=1 WHERE id='$validation' ";
            $resultats = $db->query($query);
            if ($resultats) {
                header('Location: http://adompoi7.beget.tech/administrator/vendeur.php');
                exit;
            } else {
                $mess = "<div class='alert alert-sucess'>vendeur non connu</div>";
            }
        } else {
            $mess = "<div class='alert alert-sucess'>vendeur non connu</div>";
        }
    }
}




function etat_statut()
{
    $requireds = [];

    if (count(required($_POST, $requireds)) == 0) {

        $vendeur = vendeur::find($_GET["id"]);
        if ($_POST["etatAct"] == 1) {
            $newstatut = 0;
        }
        if ($_POST["etatAct"] == 0) {
            $newstatut = 1;
        }
        $vendeur->active = $newstatut;
        if ($vendeur->update()) {
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
function connexion_vendeur()
{

    $requireds = ['email', 'password'];

    if (count(required($_POST, $requireds)) == 0) {

        $_id = vendeur::connexion($_POST['email'], $_POST['password']);

        if ($_id) {

            $_SESSION['Idvendeur'] = $_id;
            echo json_encode(["message" => "Connexion éffectué avec succès", "status" => "success"]);
        } else {

            echo json_encode(["message" => "Echec de la connexion", "status" => "error"]);
        }
    } else {
        echo json_encode(["message" => "Veuillez saisir tous les champs obligatoires", "status" => "error", "fields" => required($_POST, $requireds)]);
    }
}

function logout_vendeur()
{
    session_start();
    unset($_SESSION["Idvendeur"]);
    header("Location:http://adompoi7.beget.tech/dashboard/index.php");
}


function delete_vendeur()
{

    $id = $_POST["id"];

    if (!isset($id))
        routes::indexadmin();

    if (vendeur::delete($id)) {

        echo json_encode(["message" => "Suppresion éffectué avec succès", "status" => "success"]);
    } else {

        echo json_encode(["message" => "Echec de la suppression", "status" => "error"]);
    }
}

function deconnexion_vendeur()
{
    session_destroy();
    header('Location:http://adompoi7.beget.tech/connexion.php');
    die();
    //echo json_encode(["message" => "Connexion éffectué avec succès", "status" => "success"]);

}


if (function_exists($_GET['function']())) {

    $_GET['function']();
} else {
    //routes::index();
}
