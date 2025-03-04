<?php
require_once("Block/header.php")
?>

<?php
require_once("data.php");
require_once("choixBoisson.php");
// var_dump($_GET["boisson"]);

if (isset($_GET["boisson"]) == false) {
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

// var_dump($boissonfinded);

?>

<form method="POST" action="confirmCommande.php?boisson=<?php echo ($boissonfinded["title"]); ?> ">
    <label for="sugar">Choissisez nombre de sucres :</label>
    <input type="number" id="sucre" name="sugar" min="0" max="5" value="0" required>
    <button type="submit">Valider</button>
</form>
<?php
require_once("Block/footer.php")
?>