<?php
session_start();
//define('INCLUDE_CHECK', true);
include "_class/config.php";
include "_controllers/controllers.php";


spl_autoload_register(function ($class) {
    include "_class/" . $class . ".php";
});
include '_includes/headerprofile.php';
if (isset($_POST)) {

   

    if (isset($_POST['q'])) {

        $article = new article;
        $q = strval($_POST['q']);

        if ($data = $article->rechercheOneArticle($q)) {
            $path = "_views/recherche.view.php";
            if ($path)
             {
                include $path;
            }
        }
    }

    $articles = $_POST['article'];
    $ville = $_POST['ville'];
    $commune = $_POST['commune'];
    $marche = $_POST['marche'];
    $article = new article;



    if (!empty($articles) && !empty($ville) && !empty($commune) && !empty($marche)) 
    {
        $dataavc = $article->rechercheAvArticle((int)$article, (int) $ville, (int) $commune, (int)$marche);
        
        if ($dataavc) {
            $path = "_views/rechercheavance.view.php";
            if ($path) {
                include $path;
            }
        } else {
            echo 'pas d\'article trouver 1 ';
        }
    } 
    elseif (!empty($articles) && !empty($ville) && !empty($commune) ) {
        $dataavc = $article->rechercheAvArticle((int)$article, (int) $ville, (int) $commune);
        if ($dataavc) {
            $path = "_views/rechercheavance.view.php";
            if ($path) {
                include $path;
            }
        } else {
            echo 'pas d\'article trouver 2 ';
        }
    }
    elseif(!empty($articles) && !empty($ville) ) 
    {
        $dataavc = $article->rechercheAvArticle((int)$article, (int) $ville);
        if ($dataavc) {
            $path = "_views/rechercheavance.view.php";
            if ($path) {
                include $path;
            }
        } else {
            echo 'pas d\'article trouver 3';
        }
    } 
    else 
    {
        echo 'requete pas valide merci de reseiller ';
    }
} 
else 
{
    echo 'vilaine meuf ';
}
include '_includes/footerprofile.php';
