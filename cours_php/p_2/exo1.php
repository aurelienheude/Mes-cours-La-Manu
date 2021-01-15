<?php
/*Créer une variable age et l'initialiser avec une valeur.  
Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur.*/
include("../conf_html/p_high.php");

$age = 19; //initialisation de la variable

if($age >= 18)
{
    echo "vous êtes majeurs waou";
}else{
    echo "sorry bro va jouer au bille";
}

include("../conf_html/p_low.php");







?>