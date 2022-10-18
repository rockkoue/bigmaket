<?php
session_start();
//define('INCLUDE_CHECK', true);
include "_class/config.php";
include "_constantes/constantes.php";

spl_autoload_register(function ($class) {
    include "_class/" . $class . ".php";
});
include '_includes/headervendeur.php';
if (isset($_SESSION['Idvendeur'])) {


    if (isset($_SESSION['Idvendeur'])) {
        $path = "_views/fr/parametre.view.php";
        if ($path) {
            $id = $_SESSION['Idvendeur'];
            include  $path;
        }
    }

    if (!isset($_SESSION['Idvendeur'])) {

        include "_views/fr/error.view.php";
    }
    include '_includes/footervendeur.php';
} else {
    header('Location:index.php');
}
