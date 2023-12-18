<?php
session_start();

include "config/commandes.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Vinylog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<br>
<br>
<br>

<div class="container-fluid"></div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <form method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" style="width:80%">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" name="password" style="width:80%">
            </div>
                <input type="submit" class="btn btn-danger" name="envoyer" value= "Se connecter">
        </form>

        </div>
        <div class="col-md-3"></div>
    </div>
</div>


</body>
</html>

<?php
if(isset($_POST['envoyer'])){
    if(!empty($_POST['email']) AND !empty($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        echo $email;
        
        echo $password;

        $admin = getAdmin($email, $password);

        if($admin){
            $_SESSION['Test'] = $admin;
            header("Location: ./admin/index.php");

        }else{
            echo "Probleme de connexion";
            header("Location: index.php");
        }
    }
}

?>