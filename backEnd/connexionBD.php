<?php
    $bd = "mmontouro_bd";
    $host = "lakartxela.iutbayonne.univ-pau.fr";
    $user = "mmontouro_bd";
    $pass = "mmontouro_bd";

    $tableCD = "CD";
    $tableAuteur = "Auteur";

    $link = mysqli_connect($host, $user, $pass, $bd) or die("Impossibe de se connecter à la BD");

    if(mysqli_connect_errno()){
        echo "Failed to connect to MYSQL : " . mysqli_connect_errno();
        exit();
    };

    //récupération des données
    $sql = "SELECT * FROM CD";
    
    mysqli_close($link);    
?>