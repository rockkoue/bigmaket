<?php
session_start();
//define('INCLUDE_CHECK', true);
include "_class/config.php";
include "_controllers/controllers.php";


spl_autoload_register(function ($class) {
    include "_class/" . $class . ".php";
});

if (isset($_GET['idarticle'])) {

    include '_includes/headerprofile.php';

    $articles = (int)$_GET['idarticle'];

    //$article = (new article)::find($articles);
    $infoarticle = (new article)::infoarticle($articles)[0];

    $path = "_views/infoarticle.view.php";
    if ($path) {
        include $path;
    }
    include '_includes/footerprofile.php';

    /*
    if (isset($_GET['idarticle'])  && isset($_GET['idvendeur'])) {
        include '_includes/headerprofile.php';

        $articles = (int)$_GET['idarticle'];
        $vendeurs = (int)$_GET['idvendeur'];

        //$article = (new article)::find($articles);
       // $vendeur = (new vendeur)::find($vendeurs);
       $infoarticle = (new article)::infoarticle($articles)[0];

        $path = "_views/detailsarticle.view.php";
        if ($path) {
            include $path;
        }
        include '_includes/footerprofile.php';
    } else {
        include '_includes/headerprofile.php';

        $articles = (int)$_GET['idarticle'];

        //$article = (new article)::find($articles);
        $infoarticle = (new article)::infoarticle($articles)[0];

        $path = "_views/infoarticle.view.php";
        if ($path) {
            include $path;
        }
        include '_includes/footerprofile.php';
    }*/
} else {
    echo ' not found 404 error ';
}
