<?php
session_start();
include("_includes/fr/headeradmin.php");
if ($_SESSION['IdAdministrateur']) {
    if (isset($_GET['userencour']) && $_GET['userencour'] = 'ok') {
        include("_views/fr/userencour.view.php");
    } else {
        include("_views/fr/user.view.php");
    }
} else {
    header("Location:/rock/admin/login.view.php");
}
include("_includes/fr/footeradmin.php");
