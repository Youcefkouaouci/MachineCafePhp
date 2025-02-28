<div class="choixBoisson">
  <?php
  require_once("data.php");
  ?>

  <form method="POST" action="confirmBoisson.php">
    <label for="Boissons"> Choose your Coffee</label>

    <select name="title" id="id">
      <?php
      foreach ($Boissons as $Boisson) {
      ?>
        <option value="<?php echo ($Boisson['title']) ?>">
          <?php echo ($Boisson["title"]) ?>
        </option>
      <?php
      }
      ?>
      <input type="Submit" value="Send" />
    </select>
  </form>
</div>

<div class="confirmBoisson">
  <?php
  require_once("data.php");
  var_dump($_POST);

  if (isset($coffees["title"])) {
    header("Location: choixSucre.php"); // Remplace par l'URL correcte
    exit();
  } else {
    header("Location: choixBoisson.php");
    exit();
  }
  ?>
</div>

<div>


  <?php
  // Vérifier si la donnée "boisson" est présente dans la requête GET
  if (isset($_GET["boisson"])) {
    $boisson = $_GET["boisson"];

    // Liste des boissons pouvant avoir du sucre (exemple)
    $boissons["sugar"];

    // Vérifier si la boisson peut avoir du sucre
    if (in_array($boisson, $boissonsAvecSucre)) {
      header("Location: choixSucre.php?boisson=" . urlencode($boisson));
      exit();
    } else {
      header("Location: confirmCommande.php?boisson=" . urlencode($boisson));
      exit();
    }
  } else {
    // Si la donnée "boisson" est absente, rediriger vers une page d'erreur
    header("Location: erreur.php?message=Boisson non spécifiée");
    exit();
  }
  ?>
</div>