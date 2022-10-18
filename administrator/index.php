<?php
session_start();
if ($_SESSION['IdAdministrateur']) {
    include("_includes/fr/headeradmin.php");
    include("_views/fr/menuadmin.view.php");
    include("_includes/fr/footeradmin.php");
} else {
    header("Location:/administrator/login.php");
}
