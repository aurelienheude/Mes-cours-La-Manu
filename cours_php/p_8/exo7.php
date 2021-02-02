<?php 

$date1 = new DateTime();
$date1->add(new dateInterval("P20D")); //"Period20Days"
echo $date1->format("d-m-Y");

?>