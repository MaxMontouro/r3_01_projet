<?php

$host = 'localhost';
$dbname = ''; // need to be changed 
$user = ''; //need to be changed
$password = '';

try {
    $access = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();

}


?>