<?php
require_once("data.php");
// var_dump($_POST["title"]);
// var_dump($Boissons);
// Vérifier si une boisson a été sélectionnée
if (isset($_POST["title"]) == true) {

    foreach ($Boissons as $boisson) {
        $BoissonChoice = $_POST["title"];

        if ($BoissonChoice == $boisson["title"]) {
            if ($boisson["sugar"] === true) {
                // Rediriger vers la page de choix de sucre
                header("Location: choixSucre.php?boisson=" . $boisson["title"]);
                exit();
            } else {
                // Rediriger vers la confirmation de commande
                header("Location: confirmCommande.php?boisson=" . $boisson["title"]);
                exit();
            }
        }
    }
}
