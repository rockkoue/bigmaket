<?php
session_start();
//define('INCLUDE_CHECK', true);
include "_class/config.php";
include "_constantes/constantes.php";
include "_functions/functions.php";

spl_autoload_register(function ($class) {
    include "_class/" . $class . ".php";
});
include '_includes/header3.php';
include "_views/registeruser.view.php";
include '_includes/footer3.php';
