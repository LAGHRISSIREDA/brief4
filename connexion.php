<?php
//include du fichier config
include "config.php";
//etablir connexion avec database
try{
    $pdo = new PDO($dsn,$username,$password);
    echo 'connexion etablit';
}catch(PDOException $e){
    die('Erreur : ' . $e->getMessage());
}
?>