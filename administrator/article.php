<?php
session_start();
if ($_SESSION['IdAdministrateur']) {
    include("_includes/fr/headeradmin.php");
    include("_views/fr/article.view.php");
    include("_includes/fr/footeradmin.php");
} else {
    header("Location:/dashboard/login.view.php");
}
