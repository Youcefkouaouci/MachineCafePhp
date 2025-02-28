<?php
require_once("data.php");
var_dump($_POST);

if (isset($_POST["title"])) {
    header("Location: choixSucre.php?sugar=$_GET");
} else {
    header("Location: choixBoisson.php?");
}
