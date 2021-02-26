<?php include "models/Hero.php" ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warcraft</title>

    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
<div class="hero">
<div class="character">
<header>Caractéristique du Héro</header>
<article class="character_info">
    <ul>
        <?php 
        
            $obj = new hero(20, 200, "épée sacré", 80, "bouclier de doran", 100);

            echo "
            <li>point de vie du héro : ".$obj->get_health()."</li>
            <li>Rage du héro : ".$obj->get_rage()."</li>
            <li>Arme : ".$obj->get_weapon()."</li>
            <li>dégat de l'arme : ".$obj->get_weapon_damage()."</li>
            <li>Bouclier : ".$obj->get_shield()."</li>
            <li>Défense du bouclier : ".$obj->get_shield_value()."</li>";
        ?>
    <ul>
</article>

</div>

</div>

</body>
</html>