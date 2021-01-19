<?php 

$tableau_haut_de_france = array("02" => "aisne",
                                "59" => "nord",
                                "60" => "oise",
                                "62" => "pas-de-calais",
                                "80" => "Somme");

$tableau_add_reims = array("51" => "reims");
    $tableau_final = array_replace($tableau_haut_de_france, $tableau_add_reims);
    print_r($tableau_final);
?>