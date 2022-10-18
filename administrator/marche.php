<?php
session_start();
include("_includes/fr/headeradmin.php");
if ($_SESSION['IdAdministrateur']) {
    include("_views/fr/marche.view.php");
} else {
    header("Location:/dashboard/login.view.php");
}
include("_includes/fr/footeradmin.php");
