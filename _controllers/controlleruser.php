<?php
session_start();
include "../_class/config.php";
include "../_constantes/constantes.php";
include "../_functions/functions.php";

spl_autoload_register(function ($class) {
    include "../_class/" . $class . ".php";
});

function add_user()
{
    $requireds = [];
    if (count(required($_POST, $requireds)) == 0) {
        $user = new user;
        $user->nom = $_POST["nom"];
        $user->prenom = $_POST["prenom"];
        $registeremail = $user->email = $_POST["email"];
        $user->genre = $_POST["genre"];
        $user->telephone = $_POST["telephone"];
        $user->password = hash('ripemd160', $_POST["password"]);
        $user->status = 1;
        $access = $user->access = md5(rand());
        $message = "votre inscrition en cours de traitement merci de l'activé";

        if ((new user)::EmailExist($user->email)) {
            echo json_encode(["message" => "ce email existe deja", "status" => "error"]);
            exit();
        } else {

            if ($user->add()) {
                global $db;
                $stmt = $db->query("SELECT LAST_INSERT_ID() FROM user");
                $lastId = $stmt->fetchColumn();
                $_SESSION['Iduser'] = $lastId;
                $user->EnvoieMailActivation($registeremail, $message, $access);
                echo json_encode(["message" => "compte creé  avec succès", "status" => "success"]);
                //Header('Location:http://adompoi7.beget.tech/index.php');
            } else {
                echo json_encode(["message" => "Echec de creation de compte  veuillez réessayer", "status" => "error"]);
            }
        }
    } else {
        echo json_encode(
            ["message" => "Veuillez saisir tous les champs obligatoires", "status" => "error", "fields" => required($_POST, $requireds)]
        );
    }
}

function updateparametre_user()
{
    if ($id = (int) $_SESSION['Iduser']) {

        $user = user::find($id);

        $avataruser = UploadFile('avatar', '_files/avatar/user/');

        if ($avataruser == True) $user->avatar = $avataruser;
        if ($_POST["pays"] != '') $user->pays = $_POST["pays"];
        if ($_POST["description"] != '') $user->description = $_POST["description"];
        if ($_POST["ville"] != '') $user->ville = $_POST["ville"];
        if ($_POST["commune"] != '') $user->commune = $_POST["commune"];


        if ($user->update()) {

            echo json_encode(["message" => "Mofdification éffectué avec succès", "status" => "success"]);
        } else {

            echo json_encode(["message" => "Echec de la mofdification veuillez réessayer", "status" => "error"]);
        }
    } else {
        echo json_encode(["message" => "inconne user", "status" => "error"]);
    }
}



function updateparametrecompte_user()
{
    if ($id = (int) $_SESSION['Iduser']) {
        $user = user::find($id);
        if ($_POST["nomprenom"] != '') $user->nomprenom = $_POST["nomprenom"];
        if ($_POST["datenaissance"] != '') $user->datenaissance = $_POST["datenaissance"];
        if ($_POST["genre"] != '') $user->genre = $_POST["genre"];

        if ($user->update()) {

            echo json_encode(["message" => "Mofdification éffectué avec succès", "status" => "success"]);
        } else {

            echo json_encode(["message" => "Echec de la mofdification veuillez réessayer", "status" => "error"]);
        }
    } else {
        echo json_encode(["message" => "inconne user", "status" => "error"]);
    }
}



function connexion_user()
{

    $requireds = ['email', 'password'];
    $vendeur = new vendeur();

    if (count(required($_POST, $requireds)) == 0) {

        $_iduser = user::connexionuser($_POST['email'], $_POST['password']);
        $_idvendeur = user::connexionvendeur($_POST['email'], $_POST['password']);

        if ($_iduser) {
            $_SESSION['Iduser'] = $_iduser;
            header('Location:http://adompoi7.beget.tech/index.php');
            //echo json_encode(["message" => "Connexion éffectué avec succès", "status" => "success"]);
        }
        if ($_idvendeur) {
            $_SESSION['Idvendeur'] = $_idvendeur;
            header("Location:http://adompoi7.beget.tech/dashboard/index.php");
        }

        //echo json_encode(["message" => "Connexion éffectué avec succès", "status" => "success"]);
        if (isset($_iduser) and isset($_idvendeur)) {
            echo json_encode(["message" => "Echec de la connexion", "status" => "error"]);
        }
    } else {
        echo json_encode(["message" => "Veuillez saisir tous les champs obligatoires", "status" => "error", "fields" => required($_POST, $requireds)]);
    }
}



function deconnexion_user()
{
    session_destroy();
    header('Location:http://adompoi7.beget.tech/index.php');
    die();
    //echo json_encode(["message" => "Connexion éffectué avec succès", "status" => "success"]);

}


function validationacount()
{

    if (isset($_GET['iduser'])) {
        global $db;

        $validation = (int)$_GET['iduser'];
        $stmt = $db->prepare("SELECT * FROM user WHERE Id=$validation");
        $stmt->execute(['validation' => $validation]);
        $val = $stmt->fetchAll();

        if ($stmt->rowCount() > 0) {

            $query = "UPDATE  user SET status=0 WHERE Id='$validation' ";
            $resultats = $db->query($query);
            if ($resultats) {
                header('Location: http://adompoi7.beget.tech/administrator/user.php');
                exit;
            } else {
                $mess = "<div class='alert alert-sucess'>user non connu</div>";
            }
        } else {
            $mess = "<div class='alert alert-sucess'>user non connu</div>";
        }
    }
}

function unvalidationacount()
{
    if (isset($_GET['iduser'])) {
        global $db;

        $validation = $_GET['iduser'];

        $stmt = $db->prepare("SELECT * FROM user WHERE Id=:validation");
        $stmt->execute(['validation' => $validation]);
        $val = $stmt->fetchAll();

        if ($stmt->rowCount() > 0) {

            $query = "UPDATE  user SET status=1 WHERE Id='$validation' ";
            $resultats = $db->query($query);
            if ($resultats) {
                header('Location: http://adompoi7.beget.tech/administrator/user.php');
                exit;
            } else {
                $mess = "<div class='alert alert-sucess'>user non connu</div>";
            }
        } else {
            $mess = "<div class='alert alert-sucess'>user non connu</div>";
        }
    }
}





function etat_statut()
{
    $requireds = [];

    if (count(required($_POST, $requireds)) == 0) {

        $user = user::find($_GET["id"]);
        if ($_POST["etatAct"] == 1) {
            $newstatut = 0;
        }
        if ($_POST["etatAct"] == 0) {
            $newstatut = 1;
        }
        $user->active = $newstatut;
        if ($user->update()) {
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



function delete_user()
{

    $id = $_POST["id"];

    if (!isset($id))
        routes::indexadmin();

    if (user::delete($id)) {
        echo json_encode(["message" => "Suppresion éffectué avec succès", "status" => "success"]);
    } else {
        echo json_encode(["message" => "Echec de la suppression", "status" => "error"]);
    }
}

function sencodetouser()
{

    $email = $_POST['ancienemail'];
    $code = random_int(1000, 9999);
}

if (function_exists($_GET['function']())) {

    $_GET['function']();
} else {
    //routes::index();
}
