<?php
    include('config/constant.php');

	if(isset($_GET["username"])){
		$sql = $pdo->prepare("DELETE FROM admin WHERE username=:username");
		$sql->bindParam(":username", $_GET["nis"]);
		$sql->execute();

		if ($sql==TRUE){
            $_SESSION['delete'] = "Admin Deleted Succesfully";
            header("location:".SITEURL.'/manage-admin.php');
        }
        else{
            $_SESSION['delete'] = "Failed to Delete Admin";
            header("location:".SITEURL.'/home-admin.php');
        }
	}
	else{
		echo("GABISA TAU");
	}
?>

