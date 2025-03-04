<?php
require_once("block/header.php");
require_once("data.php");
//Vérifier la présence des données ( avec isset ), le paramètre que j'ai ajouté dans l'url dans la page confirmBoisson.php
//Si la donnée n'est pas présente je redirige
if (isset($_GET["boisson"]) == false) {
    header("Location: choixBoisson.php");
    exit();
}
//Je stocke dans une variable pour ne pas réecrire $_GET["boisson"]
$choixBoisson = $_GET["boisson"];
//On n'a pas encore trouvé la boisson
$boissonTrouvee = null;
//Vérifier la validité des données 
// Je vais chercher dans le tableau un café avec le meme titre
foreach ($cafes as $cafe) {
    if ($cafe["titre"] == $choixBoisson) {
        $boissonTrouvee = $cafe;
    }
}
//Si je n'ai pas trouvé de boisson je redirige
if ($boissonTrouvee == null) {
    header("Location: choixBoisson.php");
    exit();
}

?>
<!-- Affichage récapitulatif -->
<h1>
    <?php echo ("Choississez la sucrage pour votre " . $boissonTrouvee["titre"]); ?>
</h1>
<!-- Formulaire en méthode POST vers la page confirmCommande.php -->
<!-- Ajout d'un paramètre GET a la fin de l'url de l'action pour conserver le choixBoisson à travers les pages -->
<form method="POST" action="confirmCommande.php?boisson=<?php echo ($boissonTrouvee["titre"]); ?>">
    <input type="number" min="0" max="5" name="sucre" value="0">
    <input type="submit" submit="Valider">
</form>

<?php
require_once("block/footer.php");
?>