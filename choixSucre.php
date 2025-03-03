<?php
require_once("data.php");
require_once("choixBoisson.php");
?>

<form method="POST" action="confirmCommande.php">
    <label for="sugar">Choissisez nombre de sucres :</label>
    <input type="number" id="sucre" name="sucre" min="0" max="5" value="0" required>
    <button type="submit">Valider</button>
</form>