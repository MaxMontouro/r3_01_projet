
<?php

require("config/commandes.php");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paiement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
    
<br>
<br>
<br>
<br>
<br>

<div class="container-fluid d-flex justify-content-center align-items-center">
    <div class="row">
        <div class="col-md-10"></div>

        <div>
            <form method="post">
                <div class="mb-3">
                    <label for="cb" class="form-label">Carte Bancaire : </label>
                    <input type="text" class="form-control" name="cb">
                </div>
                <div class="mb-3">
                    <label for="date_validite" class="form-label">Date de validité (MM/YYYY) : </label>
                    <input type="text" class="form-control" name="date_validite">
                </div>
                <button type="submit" name="vider" class="btn btn-primary">Payer</button>
            </form>
        </div>

    </div>
</div>


</body>
</html>


<?php
if (isset($_POST['vider'])){
    try {
        if (isset($_POST['cb']) && isset($_POST['date_validite'])) {
            $carteBancaire = $_POST['cb'];
            $date_valide = $_POST['date_validite'];

            if (strlen($carteBancaire) === 16 && $carteBancaire[0] === $carteBancaire[15]) {
                $dateActuelle = strtotime(date('Y-m-d'));
                $dateplus3mois = strtotime('+3 months', $dateActuelle);

                // date de validité au format MM/YYYY
                $dateValideParties = explode('/', $date_valide);
                if (count($dateValideParties) === 2) {
                    $mois = $dateValideParties[0];
                    $annee = $dateValideParties[1];

                    // date au format "YYYY-MM-01" pour comparer
                    $dateValideFormat = strtotime("$annee-$mois-01");
                    
                    if ($dateValideFormat > $dateplus3mois) {
                        viderPanier();
                    } else {
                        echo "La date de validité de la carte doit être supérieure à la date actuelle + 3 mois.";
                    }
                } else {
                    echo "Format de date invalide. Utilisez le format MM/YYYY.";
                }
            } else {
                echo "Le numéro de carte bancaire doit contenir 16 chiffres et le premier et le dernier chiffre doivent être identiques.";
            }
        } else {
            echo "Veuillez saisir un numéro de carte bancaire et une date de validité.";
        }
    } catch (Exception $e) {
        echo $e->getMessage(); 
    }
}
?>
