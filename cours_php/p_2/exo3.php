<?php

$age = 19;
$gender = "femme";

    if($age >= 18 && $gender == "homme")
    {
        echo "Vous êtes un homme et vous êtes majeur";
    }else if($age < 18 && $gender == "homme") // its working
    {
        echo "Vous êtes un homme et vous êtes mineur.";
    }else if($age >= 18 && $gender == "femme")
    {
        echo "Vous êtes une femme et vous êtes majeure";
    }else{
        echo "Vous êtes un femme et vous êtes mineure.";
    }
