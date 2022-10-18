<?php
session_start();

if ($_SESSION['IdAdministrateur']) { 
    include("_includes/fr/headeradmin.php");
    include("_views/fr/categorie.view.php");
    include("_includes/fr/footeradmin.php");
}
else {
    header("Location:/rock/admin/login.php");
}

