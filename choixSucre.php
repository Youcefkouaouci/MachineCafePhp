<?php
require_once("data.php");
require_once("choixBoisson.php");

var_dump($_GET["boisson"]);
foreach ($Boissons as $boisson) {
    $BoissonChoice = $_GET["title"];
    if ($BoissonChoice == $boisson["title"]) {
    }
}

?>

<form method="POST" action="confirmCommande.php?boisson=" . $BoissonChoice>
    <label for="sugar">Choissisez nombre de sucres :</label>
    <input type="number" id="sucre" name="sucre" min="0" max="5" value="0" required>
    <button type="submit">Valider</button>
</form>