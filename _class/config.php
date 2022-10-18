<?php

define('USER', "adompoi7_mak");
define('PASSWORD', "05&@gtd");
define('SERVER', "localhost");
define('DB', "adompoi7_mak");

//date_default_timezone_set('Saint-petersboug/Russie');

try {

    $db = new PDO("mysql:host=" . SERVER . ";dbname=" . DB, USER, PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->exec('SET NAMES utf8');
    //var_dump('cool');
    return $db;
} catch (Exception $e) {
    // die('Erreur : ' . $e->getMessage());
    //var_dump('bad');
}
