<?php
require_once("data.php");
var_dump($_POST);

// Vérifier si une boisson a été sélectionnée
if (isset($_POST["title"])) {
    foreach ($Boissons as $boisson) {

        if ($_POST["title"] == $boisson["title"]) {
            if ($boisson["sugar"] === true) {
                // Rediriger vers la page de choix de sucre
                header("Location: choixSucre.php?boisson=" . $_POST["title"]);
                exit();
            } else {
                // Rediriger vers la confirmation de commande
                header("Location: confirmCommande.php");
                exit();
            }
        }
    }
}
