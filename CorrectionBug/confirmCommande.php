<?php
require_once("block/header.php");
require_once("data.php");
//Vérifier la présence des données 
//( avec isset )
//Si une des données donnée n'est pas présente je redirige
if (isset($_GET["boisson"]) == false) {
    header("Location: choixBoisson.php");
    exit();
}
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
// Si je n'ai pas trouvé de boisson je redirige
if ($boissonTrouvee == null) {
    header("Location: choixBoisson.php");
    exit();
}

//Si la boisson a besoin de sucre
if ($boissonTrouvee["sucre"] == true) {
    //On vérifie la présence de la donnée qui contient le sucre
    if (isset($_POST["sucre"]) == false) {
        header("Location: choixBoisson.php");
        exit();
    }
    //Je sticke dans une variable, plus confortable a utiliser
    $choixSucre = $_POST["sucre"];
    //Si le sucre est invalide, inferieur a 0 ou superieur a 5, je redirige
    if ($choixSucre < 0 && $choixSucre > 5) {
        header("Location: choixBoisson.php");
        exit();
    }
}
?>
<!-- Affichage de la commande "titre boisson" "nombres de sucres" "prix" -->
<h1>Confirmer votre commande
    <?php echo($boissonTrouvee["titre"]);
    // Afficher le sucre si présent et affiche pluriel/singulier
        if(isset($choixSucre)){
            if($choixSucre == 0){
                echo(" sans sucre");
            }else{
                if($choixSucre == 1){
                    echo(" avec 1 sucre");
                }else{
                    echo(" avec " . $choixSucre . " sucres");
                }
            }
        }
    ?>
      <?php echo($boissonTrouvee["prix"]); ?> €
</h1>

<!-- Formulaire qui renvoie au début du processus ou valide la commande -->
<form action="commandeFinie.php">
        <!-- Ce bouton utilise l'action du formulaire -->
        <input type="submit" value="Valider">
        <!-- Ce bouton utilise formAction qui permet de donner un autre fichier de validation à un input-->
        <input type="submit" value="Annuler" formaction="choixBoisson.php">
</form>


<?php
require_once("block/footer.php");
?>