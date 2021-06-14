<?php

session_start();

define('SITEURL', 'http://localhost/test');

$host='localhost';
$nama_db = 'hana';
$user = 'postgres';
$password = 'password'; 
try {
	$dsn = "pgsql:host=$host;port=5433;dbname=$nama_db;";

	// make a database connection
	$pdo = new PDO(
		$dsn,
		$user,
        $password,
		[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
	);

	if (!$pdo) {
		echo "Failed to connect to the $nama_db database!";
	}
} 

catch (PDOException $e) {
	die($e->getMessage());
}

?>