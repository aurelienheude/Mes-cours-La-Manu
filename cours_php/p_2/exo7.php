<?php 
/*Traduire ce code avec des if et des else :

<?php
  $var_b = 'Je suis une variable qui à une valeur';
  echo $var_b ?? 'Je suis une variable sans valeur';
?>*/

$var_b = "Je suis une variable qui à une valeur";

if(empty($var_b))
{
    $var_b ="Je suis une variable sans valeur";
    echo $var_b;
}

?>