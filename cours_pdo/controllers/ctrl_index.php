<?php

require_once "./myConfig.php";
require_once "./models/Database.php";
require_once "./models/Clients.php";

$clientsObj = new Clients;
$clientsArray = $clientsObj->getAllClients();
//var_dump($clientsArray);

?>