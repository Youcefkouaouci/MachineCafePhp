<?php
// Utiliser require_once pour importer le fichier data.php
require_once("data.php");
//Je récupère le choix de l'utilsateur, résultat du formulaire
// var_dump($_POST["boisson"]);
// var_dump($cafes);

// Il faut vérifier que le champ du formulaire reçu
// contient bien une donnée valide pour identifier la boisson choisie.

//Si $_POST["boisson"] est définie je continue la validation
if (isset($_POST["boisson"]) == true) {
    // Je vais chercher dans le tableau un café avec le meme nom
    // Je parcours mes data qui contiennent les cafés
    foreach ($cafes as $cafe) {
        //Si le titre d'un café dans data correspond au choix de l'utilisateur
        if ($cafe["titre"] == $_POST["boisson"]) {
            // J'ai trouvé la boisson correspondante. 
            // Si le café peut avoir du sucre
            if($cafe["sucre"] === true ){
                 // rediriger vers le fichier choixSucre.php
                 header("Location: choixSucre.php?boisson=" . $cafe["titre"]);
                 exit();
            }else{
                // Si la boisson ne peut pas avoir de sucre,
                //rediriger vers le fichier confirmCommande.php
                header("Location: confirmCommande.php?boisson=" . $cafe["titre"]);
                exit();
            }
        }
    }
}
//  Si la donnée n’est pas valide, renvoyer à la page choixBoisson.php
//  Redirection par défaut
header("Location: choixBoisson.php");