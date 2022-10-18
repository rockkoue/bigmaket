<?php
session_start();
//define('INCLUDE_CHECK', true);
include "_class/config.php";
include "_constantes/constantes.php";

spl_autoload_register(function ($class) {
    include "_class/" . $class . ".php";
});

if (isset($_SESSION['Iduser'])) {
    include '_includes/headervendeur.php';
    if (isset($_SESSION['Iduser']) && $_GET['page'] == 'voir') {
        $path = "_views/detailvendeur.view.php";
        if ($path) {
            $id = $_SESSION['Idvendeur'];
            include  $path;
        }
    }
    if (isset($_SESSION['Idvendeur']) && $_GET['page'] == 'modif') {
        include "_views/modvendeur.view.php";
    }
    if (!isset($_SESSION['Idvendeur'])) {

        include "_views/error.view.php";
    }
    include '_includes/footervendeur.php';
} else {
    header('Location:index.php');
}
