<?php
require_once("data.php");
var_dump($_GET);
?>


<form method="POST" action="confirmBoisson.php">

    <label for="Coffees"> Choose your Coffee</label>

    <select name="title" id="title">
        <?php
        foreach ($coffees as $coffee) {
        ?>
            <option value="<?php $coffee(['title']) ?>"> <?php echo ($coffee["title"]) ?></option>
        <?php
        }
        ?>
        <input type="Submit" value="Send">
    </select>
</form>