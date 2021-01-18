<?php

/*L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. Cette échelle va de 1 à 9.
Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante.*/


$magnitude = 1;

$dammage = "";

switch($magnitude)
{
    case "1": 
        $dammage = "Micro-séisme impossible à ressentir. <br />";
        break;
    case 2: 
        $dammage = "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres. <br />";
        break;
        case 3: 
        $dammage = "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.<br />";
            break;
        case 4: 
        $dammage = "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.<br />";
            break;
        case 5: 
        $dammage = "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes. <br />";
            break;
        case 6: 
        $dammage = "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.<br />";
            break;
        case 7: 
        $dammage = "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.<br />";
            break;
        case 8: 
        $dammage = "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.<br />";
            break;
        case 9: 
        $dammage = "Séisme capable de tout détruire sur une très vaste zone.";
            break;

        default : 
        $dammage = "Veuillez saisir une magnétude entre 1 et 9"; 
        }

    echo $dammage;