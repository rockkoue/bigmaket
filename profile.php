<?php
session_start();
//define('INCLUDE_CHECK', true);
include "_class/config.php";
include "_constantes/constantes.php";

spl_autoload_register(function ($class) {
    include "_class/" . $class . ".php";
});

if (isset($_SESSION['Iduser'])) {
    include '_includes/headerprofile.php';
    if (isset($_SESSION['Iduser']) && $_GET['page'] == 'voir') {
        $path = "_views/detailuser.view.php";
        if ($path) {
            $id = $_SESSION['Iduser'];
            include  $path;
        }
    }
    if (isset($_SESSION['Iduser']) && $_GET['page'] == 'modif') {
        include "_views/moduser.view.php";
    }
    if (!isset($_SESSION['Iduser'])) {

        include "_views/error.view.php";
    }
    include '_includes/footerprofile.php';
} else {
    header('Location:connexion.php');
}
