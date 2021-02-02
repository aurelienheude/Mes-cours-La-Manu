<?php 

$date1 = new DateTime();
$date1->sub(new dateInterval("P22D")); //"Period22Days"
echo $date1->format("d-m-Y");

?>