<?php

    $date1 = new DateTime(date("d-m-Y"));
    $date2 = new DateTime(date("16-05-2016"));

    echo "<hr>";               

    $interval = $date1->diff($date2);
    
    var_dump ($interval);
    
    $nbdays = $interval->format("%R %a");
?>