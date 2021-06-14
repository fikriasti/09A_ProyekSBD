<?php

session_start();

define('SITEURL', 'http://localhost/test');

$host='localhost';
$nama_db = 'proyek_akhir';
$user = 'postgres';
$password = 'nasadewa19'; 
try {
	$dsn = "pgsql:host=$host;port=5432;dbname=$nama_db;";

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
