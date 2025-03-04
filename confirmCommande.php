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
$sugarChoice = $_POST["sugar"];

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
    }
}


?>
<h1>votre commande :</h1>

<?php
require_once("Block/footer.php")
?>