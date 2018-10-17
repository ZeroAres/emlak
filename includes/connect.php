<?php

	
	// DB Connection Settings
	$host = "localhost";
	$database = "emlak";
	$user = "root";
	$password = "rootroot";

	// Connection
	$db = new PDO("mysql:host=localhost;dbname=$database;charset=utf8", $user, $password);

?>