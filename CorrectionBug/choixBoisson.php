<?php
require_once("block/header.php");
// Utiliser require_once pour importer le fichier data.php
require_once("data.php");
?>
<!-- un formulaire méthode POST qui ciblera le fichier confirmBoisson.php -->
<form method="POST" action="confirmBoisson.php">
<!-- Le formulaire devra contenir un champ permettant de choisir un des cafés disponibles en limitant au maximum les erreurs.  -->
<!-- Utilisation d’un input <select> -->
    <label for="boisson">Choisir une boisson:</label>
    <select id="boisson" name="boisson">
        <!-- Affichage de toutes les options selon mes données -->
        <?php foreach ($cafes as $cafe) { ?>
            <option value="<?php echo($cafe["titre"]); ?>">
                <?php echo($cafe["titre"]); ?> 
            </option>
        <?php } ?>
    
    </select>

    <input type="submit" value="Valider">
</form>













<?php 
    require_once("block/footer.php");
?>