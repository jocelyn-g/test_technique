<?php
// Constantes d'environnement
define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "");
define("DBNAME", "test_technique");

$dns = "mysql:dbname=".DBNAME.";host=".DBHOST;

// On se connecte à la base de donée
try{
    // On instancie
    $db = new PDO($dns, DBUSER, DBPASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Envoie les données en UTF8
    $db->exec("SET NAMES utf8");
}catch(PDOException $e){
    die("Erreur:".$e->getMessage());
}