<?php
    include('config/constant.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/admin.css">

	<title>Login Admin - Chillflix Management</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login Admin</p>
			<div class="input-group">
				<input type="text" placeholder="Enter Your Username" name="username" >
			</div>
			<div class="input-group">
				<input type="password" placeholder="Enter Your Password" name="password">
			</div>
			<div class="input-group">
				<button type="submit" name="submit" value="LOGIN" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="add-admin.php">Register Here</a>.</p>
		</form>
	</div>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $result = $pdo->prepare("SELECT FROM admin WHERE username=? AND password=?");
        $result->execute([$username, $password]);
        $res = $result->fetch();

        $count = $result->rowCount();

        if($count>0){
            $_SESSION["login"] = "<div class='success'>Login Successful.</div>";
            header('location:'.SITEURL.'/home-admin.php'); 
        }
        else{
            $_SESSION["login"] = "<div class='error text-center'>Username and Password Didn't Match.</div>";
            header('location:'.SITEURL.'/login-admin.php'); 
        }

    }
?>