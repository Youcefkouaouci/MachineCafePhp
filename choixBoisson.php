<?php
require_once("Block/header.php")
?>

<?php
require_once("data.php");
?>

<form method="POST" action="confirmBoisson.php">

    <label for="Boisson"> Choose your Coffee</label>

    <select name="boisson" id="id">
        <?php
        foreach ($boissons as $boisson) {
        ?>
            <option value="<?php echo ($boisson["title"]) ?>"> <?php echo ($boisson["title"]) ?>
            </option>
        <?php
        }
        ?>
        <input type="Submit" value="valider">
    </select>
</form>

<?php
require_once("Block/footer.php")
?>