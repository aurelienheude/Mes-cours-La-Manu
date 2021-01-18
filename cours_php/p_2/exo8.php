<?php 
/*Traduire ce code avec des if et des else :

<?php
  $number = 11;
  echo ($number % 5 == 0 && $number % 3 == 0)
  ? 'FizzBuzz'  : ( $number % 3 == 0 ? 'Fizz' : 
  ($number % 5 == 0 ? 'Buzz' : $number));
?>*/

$number = 11;

if($number % 5 == 0 && $number % 3 == 0)
{
    echo "FizzBuzz";
}elseif($number % 3 == 0)
{
  echo "fizz";
}elseif($number % 5 == 0)
{
  echo "buzz";
}else{
  echo $number." tu n'es pas dans les modulo !";
}
