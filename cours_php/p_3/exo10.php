<?php 

/*Créer une variable nombre aléatoire et l'initialiser avec un nombre aléatoire compris entre 0 et 30.
En allant de 1 à 100 avec un pas de 1, afficher tous les nombres sauf celui correspondant au nombre aléatoire.

*/

$j = rand(0, 30);

for ($i = 0; $i <= 100; $i++)
{
    
    if($i != $j)
    {
        echo "chiffre : ".$i."\n";
    }
}
?>