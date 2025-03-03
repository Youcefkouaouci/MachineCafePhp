<?php
require_once("confirmBoisson.php");
var_dump($_GET)
?>

<form method="POST" action="confirmCommande.php">
    <input type="hidden" name="boisson" value="<?= $boisson ?>">

    <label for="sucre">Nombre de sucres :</label>
    <select name="sucre" id="sucre">
        <option value="0">0 (Sans sucre)</option>
        <option value="1">1 sucre</option>
        <option value="2">2 sucres</option>
        <option value="3">3 sucres</option>
        <option value="4">4 sucres</option>
    </select>

    <button type="submit">Valider</button>
</form>