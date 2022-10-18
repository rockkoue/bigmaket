<?php
session_start();
//define('INCLUDE_CHECK', true);
include "../_class/config.php";
include "../_constantes/constantes.php";

spl_autoload_register(function ($class) {
    include "../_class/" . $class . ".php";
});

if (isset($_SESSION['Idvendeur'])) {
    include '_includes/fr/headervendeur.php';
    //verification de reception data voir
    if (isset($_GET['id-article']) && $_GET['page'] == 'voir') {
        $articles = article::find($_GET['id-article']);
        $id = $_GET['id-article'];
        $path = "_views/fr/detailarticle.view.php";
        if ($path) {
            include  $path;
        }
    }
    if (isset($_GET['id-article']) && $_GET['page'] == 'annuler') {
        include "../_views/fr/modarticle.view.php";
    }
    if (!isset($_GET['id-article'])) {
        include "_views/fr/article.view.php";
    }
    include '_includes/fr/footervendeur.php';
} else {
    header('Location:http://adompoi7.beget.tech/connexion.php');
}
