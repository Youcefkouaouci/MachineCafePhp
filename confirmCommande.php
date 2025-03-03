<?php
require_once("data.php");
var_dump($_GET("boisson"));
var_dump($_POST);

// Vérifier si une boisson a été sélectionnée
if (isset($BoissonChoice)) {

    $BoissonChoice = $_GET["title"];

    foreach ($Boissons as $boisson) {
        if ($BoissonChoice == $boisson["title"]) {
            var_dump($BoissonChoice);
        }
    }
}
?>
<h1>votre commande :</h1>