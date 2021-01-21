<?php 

    $months = array("janvier","février","Mars","Avril","Mai","Juin","Juin","Juillet","Aout","Septembre","Octobre","Novembre","décembre");
    
    $months_aout_with_accent = array(8 => "Août");
    
    $new_months = array_replace($months, $months_aout_with_accent);

    print_r($new_months);

?>