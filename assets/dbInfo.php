<?php

//create an object of connection to be called query with
$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

$query = "SELECT id, platformName FROM Platform ORDER BY id";
$resultObj = $connection->query($query);

?>
