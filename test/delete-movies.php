<?php

session_start();

define('SITEURL', 'http://localhost/bebas');

$host='localhost';
$nama_db = 'proyek_sbd';
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

<?php 

    if(isset($_GET['id_film'])) //Either use '&&' or 'AND' 
    {
    
        $id = $_GET['id_film'];
        $sql = "DELETE FROM movies WHERE id_film=$id";
        //cHeck whether the query executed or not and set the session message respectively
        
        $result = $pdo->prepare($sql)->execute ([$id]);
        if ($result == true){
            $_SESSION['delete'] = "<div class='success'>Movies Deleted Successfully.</div>";
            header("location:'http:/localhost/bebas/manage-movies.php");
        }  
        else
        {
            //Failed to Delete Food
            $_SESSION['delete'] = "<div class='error'>Failed to Delete Food.</div>";
            header("location:'http:/localhost/bebas/manage-movies.php");
        }

        //4. Redirect to Manage Food with session Message
    
    }
    else
    {
        //Redirect to Manage Food page
        //echo "REdirect";
        $_SESSION['delete'] = "<div class='error'>Unauthorized Access.</div>";
        header('location:'.SITEURL.'bebas/manage-movies.php');
    }
?>