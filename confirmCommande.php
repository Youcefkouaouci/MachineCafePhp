<?php
require_once("Block/header.php")
?>

<?php
require_once("data.php");
var_dump($_GET["boisson"]);
var_dump($_POST);

// Vérifier si une boisson a été sélectionnée
if (isset($_GET["boisson"], $_POST["sugar"]) == false) {
    header("Location: choixBoisson.php");
    exit();
}

$boissonChoice = $_GET["boisson"];
$boissonfinded = null;

foreach ($boissons as $boisson) {
    if ($boissonChoice == $boisson["title"]) {
        $boissonfinded = $boisson;
    }
}

if ($boissonfinded = null) {
    header("Location: choixBoisson.php");
    exit();
}

if ($boissonfinded["sugar"] == true) {
    if ($_POST["sugar"] = false) {
        header("Location: choixBoisson.php");
        exit();
    }
}

$sugarChoice = $_POST["sugar"];
if ($sugarChoice < 0 && $sugarChoice > 5) {
    header("Location: choixBoisson.php");
    exit();
}

?>
<!-- Affichage de la commande "titre boisson" "nombres de sucres" "prix" -->
<h1>Confirmer votre commande
    <?php echo ($boissonfinded["titre"]);
    // Afficher le sucre si présent et affiche pluriel/singulier
    if (isset($sugarChoice)) {
        if ($sugarChoice == 0) {
            echo (" sans sucre");
        } else {
            if ($sugarChoice == 1) {
                echo (" avec 1 sucre");
            } else {
                echo (" avec " . $sugarChoice . " sucres");
            }
        }
    }
    ?>
    <?php echo ($boissonTrouvee["prix"]); ?> €
</h1>


<!-- Formulaire qui renvoie au début du processus ou valide la commande -->
<form action="CommandeFinished.php">
    <!-- Ce bouton utilise l'action du formulaire -->
    <input type="submit" value="Valider">
    <!-- Ce bouton utilise formAction qui permet de donner un autre fichier de validation à un input-->
    <input type="submit" value="Annuler" formaction="choixBoisson.php">
</form>


<?php
require_once("Block/footer.php")
?>