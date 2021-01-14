<?php

/*L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. Cette échelle va de 1 à 9.
Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante.*/

$magnitude = 1;

if ($magnitude == 1) 
{
    echo "Micro-séisme impossible à ressentir.";
    
    $magnitude++;

    if ($magnitude == 2) 
    {
        echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres. <br />";
        $magnitude++;
        if ($magnitude == 3) 
        {
            echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.<br />";
            $magnitude++;
            if ($magnitude == 4) 
            {
                echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.<br />";
                $magnitude++;
                if ($magnitude == 5) 
                {
                    echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.<br />";
                    $magnitude++;
                    if ($magnitude == 6) 
                    {
                        echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.<br />";
                        $magnitude++;
                        if ($magnitude == 7) 
                        {
                            echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.<br />";
                            $magnitude++;
                            if ($magnitude == 8) 
                            {
                                echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.<br />";
                                $magnitude++;
                                if ($magnitude == 9) 
                                {
                                    echo "Séisme capable de tout détruire sur une très vaste zone.<br />";
                                    $magnitude++;
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
