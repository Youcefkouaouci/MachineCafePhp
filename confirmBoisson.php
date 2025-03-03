<?php
require_once("data.php");
var_dump($_POST);

// Vérifier si une boisson a été sélectionnée
foreach ($Boissons as $boisson) {
    if ($sugar === true) {
        // Rediriger vers la page de choix de sucre
        header("Location: choix_sucre.php");
        exit();
    } else {
        // Rediriger vers la confirmation de commande
        header("Location: confirmation_commande.php");
        exit();
    }
}




    // Vérifier si la boisson existe dans la table associative
        // Récupérer la valeur de sugar
            // Rediriger vers la page de choix de sucre
            // Rediriger vers la confirmation de commande
        // Rediriger vers la page d'accueil si la boisson n'existe pas
    // Rediriger vers la page d'accueil si aucun choix n'a été fait
