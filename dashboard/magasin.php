<?php
session_start();

$_SESSION['askpage'] = basename($_SERVER['SCRIPT_NAME'], ".php") . PHP_EOL;
if ($_SESSION['IdAdministrateur']) {
    include("_includes/fr/headeradmin.php");
    include("_views/fr/magasin.view.php");
    include("_includes/fr/footeradmin.php");
} else {
    header("Location:/dashboard/login.php", $_SESSION['askpage']);
}
