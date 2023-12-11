<?php
    include "connexionBD.php";

    //definition des mdp et login administrateur
    $login_admin ="root";
    $mdp_admin = "root";

    $passwd_admin_hash = hash("sha256", $mdp_admin);

    //recuperation des données saisient 
    $login_saisie = $_POST["login"];
    $mdp_saisie = $_POST["password"];

    //hashage du mdp saisie qui va permettre la comparaison avec celui de la base de données
    $passwd_saisie_hash = hash("sha256", $mdp_saisie);

    //recuperation des donnees de la base de donnes
    $sqlPasswd = "SELECT passwd FROM Utilisateur WHERE login = '$login_saisie'"; // le mot de passe est hashé dans la base de données
    $result = mysqli_query($link, $sql);


    //verification si les mdp sont ceux de l administrateur
    if($login_saisie == $login_admin && $passwd_hash == $passwd_saisie_hash){
        echo "Bienvenue " . $login_saisie;
        session_start();

        //on enregistre les données dans la session
        $_SESSION["login"] = $login_saisie;
        $_SESSION["passwd"] = $passwd_saisie_hash;

        //redirection vers la page a renvoyer
        header("Location: .php");

    //on test si les données saisie sont valide 
    if($login_saisie == $result && $passwd_hash == $passwd_saisie_hash){
        //verification si les mdp sont ceux de l administrateur
        if($login_saisie == $login_admin && $passwd_hash == $passwd_admin_hash){
            echo "Bienvenue administrateur";
            session_start();

            //on enregistre les données dans la session
            $_SESSION["login"] = $login_saisie;
            $_SESSION["passwd"] = $passwd_saisie_hash;

            //redirection vers la page a renvoyer
            header("Location: .php");
        }else{

            echo "Bienvenue " . $login_saisie;
            session_start();

            //on enregistre les données dans la session
            $_SESSION["login"] = $login_saisie;
            $_SESSION["passwd"] = $passwd_saisie_hash;

            //redirection vers la page a renvoyer
            header("Location: .php");

    }else{
        echo "Erreur de login ou de mot de passe";
    }

?>