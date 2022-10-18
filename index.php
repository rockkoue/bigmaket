<?php
session_start();
//define('INCLUDE_CHECK', true);
include "_class/config.php";
include "_constantes/constantes.php";
include "_functions/functions.php";

spl_autoload_register(function ($class) {
  include "_class/" . $class . ".php";
});
include '_includes/headerprofile.php';
include "_views/accueil.view.php";
include '_includes/footer.php';
