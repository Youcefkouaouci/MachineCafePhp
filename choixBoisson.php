<?php
require_once("data.php");
?>

<form method="POST" action="confirmBoisson.php">

    <label for="Boissons"> Choose your Coffee</label>

    <select name="title" id="id">
        <?php
        foreach ($Boissons as $Boisson) {
        ?>
            <option value="<?php echo ($Boisson['title']) ?>"> <?php echo ($Boisson["title"]) ?>
            </option>
        <?php
        }
        ?>
        <input type="Submit" value="valider">
    </select>
</form>