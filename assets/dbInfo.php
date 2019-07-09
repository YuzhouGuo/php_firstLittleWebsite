<?php

//create an object of connection to be called query with
$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

$query = "SELECT firstName, lastName, birthday, email, comments FROM theBase ORDER BY first_name";
$resultObj = $connection->query($query);

?>
