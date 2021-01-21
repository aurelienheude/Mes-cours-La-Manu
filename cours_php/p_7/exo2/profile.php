<?php include("../../conf_html/p_high.php"); 
session_start();

echo "<p>".$_SESSION["firstname"]."</p><br />";
echo "<p>".$_SESSION["lastname"]."</p><br />";
echo "<p>".$_SESSION["age"]."</p><br />";

?>

<a class="link" href="index.php">Ma super page index</a>

<?php include("../../conf_html/p_low.php");?>