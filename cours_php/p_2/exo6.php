<?php 

/*Traduire ce code avec des if et des else :

<?php
  $var_a = null;
  echo $var_a ?: 'Je suis une variable sans valeur';
?>*/

$var_a = 5;

if($var_a == null)
{
    echo $var_a;
}else{
  echo "youpi je suis une variable avec valeur";
}

?>