<?php 
session_start();
?>

<!DOCTYPE html>
<body>


<?php
// Vérifier si la variable $reponse est définie dans la session
if(!isset($_SESSION['reponse'])) {
    header("Location: index.php"); // Rediriger vers la page d'accueil si la variable n'est pas définie
}

// Récupérer la valeur de la variable $reponse depuis la session
$reponse = $_SESSION['reponse'];

// Afficher le résultat
echo $reponse;

// Détruire la session pour nettoyer les données
session_destroy();
?>

</body>
</html>
