<?php

$age = 23;
$gender = true;

if($gender == true)
{
    if($age >= 18 AND $gender == "homme")
    {
        echo "Vous êtes un homme et vous êtes majeur";
    }else{
        echo "Vous êtes un homme et vous êtes mineur.";
    }
}

$gender = false;

if($gender == false)
{
    if($age >= 18 AND $gender == "Femme")
    {
        echo "Vous êtes un homme et vous êtes majeur";
    }else{
        echo "Vous êtes un homme et vous êtes mineur.";
    }
}

?>