<?php
session_start();
include("_includes/fr/headeradmin.php");
if ($_SESSION['IdAdministrateur']) {
    if (isset($_GET['vendeurencour']) && $_GET['vendeurencour'] = 'ok') {
        include("_views/fr/vendeurencour.view.php");
    } else {
        include("_views/fr/vendeur.view.php");
    }
} else {
    header("Location:/rock/admin/login.view.php");
}
include("_includes/fr/footeradmin.php");
