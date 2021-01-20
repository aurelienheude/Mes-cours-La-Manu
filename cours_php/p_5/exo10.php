<?php 

    $tableau_haut_de_france = array("02" => "aisne",
                                    "59" => "nord",
                                    "60" => "oise",
                                    "62" => "pas-de-calais",
                                    "80" => "Somme");
 

    foreach($tableau_haut_de_france as $key => $value)
    {
        echo "le dépoartement ".$value." a le numéro ".$key."\n";
    }
?>