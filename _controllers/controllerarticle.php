<?php
#Genéré par GeneratorClassV4.0.0 le 11-11-2021 à 01:04:48

session_start();
include "../_class/config.php";
include "../_functions/functions.php";

spl_autoload_register(function ($class) {
    include "../_class/" . $class . ".php";
});


function add_article()
{
    $article = new article;

    $imagearticle = UploadFile('image1', '_files/article/');
    if ($imagearticle == false) {
        $imagearticle = '_files/article/default.jpg';
    }
    $image2article = UploadFile('image2', '_files/article/');
    if ($image2article == false) {
        $image2article = '_files/article/default.jpg';
    }
    $image3article = UploadFile('image3', '_files/article/');
    if ($image3article == false) {
        $image3article = '_files/article/default.jpg';
    }

    $article->libellearticle = $_POST["libellearticle"];
    $article->idcategorie = $_POST["categorie"];
    $article->prixarticle = $_POST["prix"];
    $article->idvendeur = $_SESSION['Idvendeur'];
    $article->description = $_POST["description"];
    $article->size = implode(",", $_POST["size"]);
    $article->color = implode(",", $_POST["color"]);
    $article->image = $imagearticle;
    $article->image2 = $image2article;
    $article->image3 = $image3article;
    $article->etat = 0;
    $article->datedecreation = date("d/m/y");

    if ($article->add()) {

        echo json_encode(["message" => "Ajout éffectué avec succès", "status" => "success"]);
        header("Location:articlevendeur.php");
    } else {

        echo json_encode(["message" => "Echec de l'ajout veuillez réessayer", "status" => "error"]);
    }
}
function researchAtleastOneArticle()
{
    $article = new article;
    $q = strval($_POST['q']);
    if ($data = $article->rechercheOneArticle($q)) {
        foreach ($data as $row) {
            $idarticle = $row['idarticle'];
            $libellearticle = $row['libellearticle'];
            $image = $row['image'];
            $datedecreation = $row['datedecreation'];
            $idvendeur = $row['idvendeur'];
            $description = $row['description'];
        }
    }
}

function cart_article()
{

    $requireds = ['article_id'];

    if (count(required($_POST, $requireds)) == 0) {

        if (array_key_exists($_POST['article_id'], $_SESSION['cart'])) {
            $_SESSION['cart'][$_POST['article_id']]++;
            echo json_encode(["message" => "le produit est deja dans le panier", "status" => "success", "count" => count($_SESSION['cart'])]);
        } else {
            $_SESSION['cart'][$_POST['article_id']] = 1;
            $article = article::get('idarticle', $_POST['article_id'])[0];
            echo json_encode(["message" => "$article->libellearticle ajouté au panier", "status" => "success", "count" => count($_SESSION['cart'])]);
        }
    } else {
        echo json_encode(["message" => "Veuillez saisir tous les champs obligatoires", "status" => "error", "fields" => required($_POST, $requireds)]);
    }
}

function remove_to_cart()
{

    unset($_SESSION['cart'][$_POST['article_id']]);
    echo json_encode(["message" => " ajouté au panier", "status" => 200]);
}
function increase_quantity()
{

    $_SESSION['cart'][$_POST['article_id']]++;
    echo json_encode(["message" => " quatity ++", "status" => 200]);
}
function desincrease_quantity()
{
    if ($_SESSION['cart'][$_POST['article_id']] > 1) {
        $_SESSION['cart'][$_POST['article_id']]--;
        echo json_encode(["message" => " quatity --", "status" => 200]);
    } else {
        $_SESSION['cart'][$_POST['article_id']];
        echo json_encode(["message" => " quatity --", "status" => 200]);
    }
}


if (function_exists($_GET['function']())) {

    $_GET['function']();
} else {
    //routes::index();
}
