<?php

function getAdmin($email, $password) {
    require("connection.php"); // Assurez-vous d'inclure correctement votre fichier de connexion

    // Préparez la requête avec des paramètres pour éviter les injections SQL
    $query = "SELECT * FROM users WHERE email = :email";
    $statement = $pdo->prepare($query);
    $statement->execute(array(':email' => $email));

    $admin = $statement->fetch(PDO::FETCH_ASSOC);

    if ($admin) {
        // Vérifiez le mot de passe avec password_verify (si le mot de passe est stocké de manière sécurisée avec password_hash)
        if (password_verify($password, $admin['password'])) {
            // Si le mot de passe correspond, retournez les informations de l'administrateur
            return $admin;
        }
    }

    return false; // Retourne false si les informations de connexion sont incorrectes
}

/*
function getAdmin($email, $password){
    if(require("connection.php")){
        $req = $access->prepare("SELECT users.email, users.password FROM users WHERE email = ? AND password = ?");
        
        $req->execute(array($email, $password));

        if($req->rowCount()==1){
            $data = $req->fetch();
            return $data;
        } else {
            return false;
        }
        $req->closeCursor();
    }
}

*/



function ajouter($nomCD, $dateSortie, $imagePochette, $prix){
    if(require("connection.php")){
        $req = $access->prepare("INSERT INTO cd (nomCD, dateSortie, imagePochette, prix) VALUES (?, ?, ?, ?)");
        
        $req->execute(array($nomCD, $dateSortie, $imagePochette, $prix));

        $req->closeCursor();
    }
}



function afficher(){
    $data = [];
    if(require("connection.php")){
        $req = $access->prepare("SELECT * FROM cd JOIN auteur ON cd.id = auteur.id ORDER BY cd.ID DESC");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);


        $req->closeCursor();

    }
    return $data;
}



function supprimer($id){
    if(require("connection.php")){
        $req = $access->prepare("DELETE FROM cd WHERE ID=?");

        $req->execute(array($id));
    }
}

?>