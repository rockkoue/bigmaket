<?php
session_start();
//define('INCLUDE_CHECK', true);
include "_class/config.php";
include "_controllers/controllers.php";


spl_autoload_register(function ($class) {
    include "_class/" . $class . ".php";
});

$vendeur = (int)$_GET['id'];
$vendeur = vendeur::find($vendeur);
if (isset($_GET['id']) && isset($_GET['idcat'])) {
    include '_includes/headerprofile.php';
    $path = "_views/article.view.php";
    if ($path) {
        include $path;
    }
    include '_includes/footerprofile.php';
} elseif (isset($_GET['id'])) {
    include '_includes/headerprofile.php';
    $path = "_views/magasin.view.php";

    if ($path) {
        include $path;
    }
    include '_includes/footerprofile.php';
}

if (!isset($_GET['id']) && !isset($_GET['idcat'])) {
    include '_includes/headerprofile.php';
    include '_views/magasins.view.php';
    include '_includes/footerprofile.php';
}
