<?php
require_once("Block/header.php")
?>

<?php
require_once("data.php");
// var_dump($_POST["title"]);
// var_dump($Boissons);
// Vérifier si une boisson a été sélectionnée
if (isset($_POST["boisson"]) == true) {

    $boissonChoice = $_POST["boisson"];
    foreach ($boissons as $boisson) {
        if ($boissonChoice == $boisson["title"]) {
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
//  Si la donnée n’est pas valide, renvoyer à la page choixBoisson.php
header("Location: choixBoisson.php");
?>

<?php
require_once("Block/footer.php")
?>