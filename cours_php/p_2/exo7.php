<?php 
/*Traduire ce code avec des if et des else :

<?php
  $var_b = 'Je suis une variable qui à une valeur';
  echo $var_b ?? 'Je suis une variable sans valeur';
?>*/

$var_b = null;

if(isset($var_b)) /* si $var_b est définie */
{
    echo $var_b;
}else
{
  echo "Je suis une variable non définie";
}

?>