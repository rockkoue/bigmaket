<?php
session_start();
include "_class/config.php";
include "_constantes/constantes.php";
include "_functions/functions.php";

spl_autoload_register(function ($class) {
  include "_class/" . $class . ".php";
});

if (isset($_SESSION['Iduser'])) {
  header('Location: http://adompoi7.beget.tech/index.php');
}
if (isset($_SESSION['Idvendeur'])) {
  header('Location: http://adompoi7.beget.tech/dashboard/index.php');
}

if (!isset($_SESSION['Iduser']) and !isset($_SESSION['Idvendeur'])) {
  include '_includes/header2.php';
  include '_views/connexion.view.php';
  include '_includes/footer2.php';
}
