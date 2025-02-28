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
