<?php 

/*Créer une variable isEasy de type booléan et l'initialiser avec une valeur.  
Afficher C'est facile !! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!. */

$isEasy = true;

if($isEasy == true) // si ma var est true alors...
{
    echo "c'est easy mdr <br />";
    var_dump("c'est easy mdr"); // non manipulable!
}else{
    echo "c'est chaud";
}

?>