<?php
/*Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.  
Tant que la première variable n'est pas inférieure ou égale à 10 :
- multiplier la première variable avec la deuxième
- afficher le résultat
- décrémenter la première variable*/

$var1 = 100;
$var2 = 1;

while($var1 >= 10)
{
    $result = $var1 * $var2;
   
    $var1--;
    echo$result."\n"; // \n = saut de ligne
}
?>