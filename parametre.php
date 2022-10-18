<?php
session_start();
//define('INCLUDE_CHECK', true);
include "_class/config.php";
include "_constantes/constantes.php";

spl_autoload_register(function ($class) {
    include "_class/" . $class . ".php";
});

if (isset($_SESSION['Iduser'])) {

    if ($id = (int) $_SESSION['Iduser']) {
        $user = user::find($id);
    }

    if (isset($_SESSION['Iduser']) && $_GET['page'] == 'parametre') {
        include '_includes/headerprofile.php';
        $path = "_views/parametre.view.php";
        if ($path) {
            $id = $_SESSION['Iduser'];
            include  $path;
        }
        include '_includes/footerprofile.php';
    } elseif (isset($_SESSION['Iduser']) && $_GET['page'] == 'parametrecompte') {
        include '_includes/headerprofile.php';
        include "_views/parametrecompte.view.php";
        include '_includes/footerprofile.php';
    } else {
        include '_includes/headerprofile.php';
        include "_views/parametre.view.php";
        include '_includes/footerprofile.php';
    }
} else {
    header('Location:http://adompoi7.beget.tech/login.php');
}
