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

    if (isset($_GET['idcommande']) && $_GET['page'] == 'voir') {
        $id = $_GET['idcommande'];
        $path = "_views/fr/detailscommande.view.php";
        if ($path) {
            include  $path;
        }
    }
    if (isset($_GET['idcommande']) && $_GET['page'] == 'annuler') {
        include "../_views/fr/anulercommande.view.php";
    }
    if (isset($_GET['idcommande']) && $_GET['page'] == 'modifier') {
        include "../_views/fr/modifiercommande.view.php";
    }
    if (!isset($_GET['idcommande'])) {
        include "_views/fr/accueilvendeur.view.php";
    }
    include '_includes/fr/footervendeur.php';
} else {
    header('Location:http://adompoi7.beget.tech/login.php');
}
