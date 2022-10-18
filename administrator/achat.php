<?php
session_start();
include("_includes/fr/headeradmin.php");
if ($_SESSION['IdAdministrateur']) { 
    include("_views/fr/achat.view.php");
}
else {
    header("Location:/rock/admin/login.view.php");
}
include("_includes/fr/footeradmin.php");
