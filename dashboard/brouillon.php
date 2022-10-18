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

    if (isset($_GET['id-vendeur']) && $_GET['page'] == 'voir') {
        $id = $_GET['id-vendeur'];
        $path = "_views/fr/detailsvendeur.view.php";
        if ($path) {
            include  $path;
        }
    }
    if (isset($_GET['id-vendeur']) && $_GET['page'] == 'annuler') {
        include "../_views/fr/modvendeur.view.php";
    }
    if (!isset($_GET['id-vendeur'])) {
        include "_views/fr/listearticle.view.php";
    }
    include '_includes/fr/footervendeur.php';
} else {
    header('Location:http://adompoi7.beget.tech/dashboard/login.php');
}
