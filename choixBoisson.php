<?php
require_once("data.php");
var_dump($_GET)
?>


<form method="POST" action="confirmBoisson.php">
    <select name="title" id="title">
        <option value="<?php $boisson["nom"] ?>"></option>
    </select>
</form>

<input type="submit" value="Send">

<?php
require_once "data.php";

?>