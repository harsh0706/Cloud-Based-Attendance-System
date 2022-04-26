<?php

	//  Development connection
	
	// $databaseHost = 'localhost';
	// $databaseName = 'studentdatabase';
	// $databaseUsername = 'root';
	// $databasePassword = '';

	// remote Database connection
	
	$databaseHost = 'remotemysql.com';
	$databaseName = 'jQY6veNhls';
	$databaseUsername = 'jQY6veNhls';
	$databasePassword = 'R5gOcvn0Vh';
	
	try {
		
		$conn = new PDO('mysql:host=' . $databaseHost . ';dbname=' . $databaseName . '', $databaseUsername, $databasePassword);
	}
	catch (PDOException $e) {
    echo $e->getMessage();
	}
	// echo "Connection is there<br/>";
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

?>
