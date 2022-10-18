<?php
session_start();
include "../_class/config.php";
include "../_constantes/constantes.php";
include "../_functions/functions.php";

spl_autoload_register(function ($class) {
    include "../_class/" . $class . ".php";
});


function add_commande()
{
    global $db;
    $commande = new commande;
    $lignecommande = new lignecommande;
    $code = rand(1, 99999);
    $codecomde = "CMDE_" . $code;
    //verification si matricule serveur existe
    $query = "SELECT * FROM commande WHERE codecommande='$codecomde' ";
    $resultat = $db->query($query);
    if ($resultat->rowCount() > 0) {
        $code = rand(1, 99999);
        $commande->codecommande = "CMDE_" . $code;
    } else {
        $commande->codecommande = $codecomde;
    }
    $commande->datecommande = date('Y-m-d H:i:s');
    $commande->etatcommande = 0;

    $commande->add();
    $stmt = $db->query("SELECT LAST_INSERT_ID()");
    $lastId = $stmt->fetchColumn();
    $lignecommande->id_commande = $lastId;
    // $montant = 0;

    for ($count = 0; $count < count($_POST["article"]); $count++) {
        // $montant = $montant + ($_POST["quantite"][$count] * $_POST["prix"][$count]);
        $lignecommande->refarticle = $_POST["article"][$count];
        $lignecommande->prixarticle = $_POST["prix"][$count];
        $lignecommande->quantitearticle = $_POST["quantity"][$count];
        $lignecommande->vendeur_lie_article = (int) ((new article)::vendeurLierArticle($_POST["article"][$count]))['idvendeur'];
        //var_dump($resultatsd);
        $lignecommande->add();
    }



    echo json_encode(["message" => "Mofdification éffectué avec succès", "status" => "success"]);
}

function update_commande()
{

    $requireds = [];
    if (count(required($_POST, $requireds)) == 0) {

        $commande = commande::find($_GET["id"]);

        $commande->prix = $_POST["prix"];
        $commande->libellecommande = $_POST["libellecommande"];
        $commande->refajouteur = $_SESSION['IdAdministrateur'];
        $commande->commentaire = $_POST["commentaire"];
        $commande->active = 0;

        if ($commande->update()) {

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


function etat_statut()
{
    $requireds = [];

    if (count(required($_POST, $requireds)) == 0) {

        $commande = commande::find($_GET["id"]);
        if ($_POST["etatAct"] == 1) {
            $newstatut = 0;
        }
        if ($_POST["etatAct"] == 0) {
            $newstatut = 1;
        }
        $commande->active = $newstatut;
        if ($commande->update()) {
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



function delete_commande()
{

    $id = $_POST["id"];

    if (!isset($id))
        routes::indexadmin();

    if (commande::delete($id)) {

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
