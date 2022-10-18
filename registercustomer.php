<?php
session_start();
//define('INCLUDE_CHECK', true);
include "_class/config.php";
include "_constantes/constantes.php";
include "_functions/functions.php";

spl_autoload_register(function ($class) {
    include "_class/" . $class . ".php";
});
include '_includes/header4.php';
$content = '_views/registerpage.view.php';
$url = 'http://adompoi7.beget.tech/' . $content;
$headers = @get_headers($url);
// Use condition to check the existence of URL
if ($headers && strpos($headers[0], '200')) {
    include $content;
} else {
    echo 'page not found';
}


include '_includes/footer4.php';
