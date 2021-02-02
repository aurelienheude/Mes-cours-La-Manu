<?php include("../../conf_html/p_high.php"); 
session_start();

$_SESSION["firstname"] = "heude";
$_SESSION["lastname"] = "aurélien";
$_SESSION["age"] = 23;


?>

<a class="link" href="profile.php">Ma super page de profil</a>

<?php include("../../conf_html/p_low.php");?>