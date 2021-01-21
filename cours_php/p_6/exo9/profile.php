<?php 

if(isset($_GET['surname']))
{
    echo "<img src='img/".$_GET["filename"]."' alt='super image'><br />";

    echo "Bienvenue ".$_GET["civility"]." ".$_GET["firstname"]." ".$_GET["surname"]. "<br /> Voici vos super informations envoyé !";
}

?>"