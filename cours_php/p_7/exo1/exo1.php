<?php include("../../conf_html/p_high.php");

$user_agent = $_SERVER["HTTP_USER_AGENT"];
$ip_user = $_SERVER["REMOTE_ADDR"];
$server_name = $_SERVER["SERVER_NAME"];

echo "<p>".$user_agent."<br />".$ip_user."<br />".$server_name."</p>";

?>
















<?php include("../../conf_html/p_low.php"); ?>