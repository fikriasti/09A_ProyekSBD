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

	<title>Add - Chillflix</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="text" placeholder="Enter Your Username" name="username" >
			</div>
			<div class="input-group">
				<input type="password" placeholder="Enter Your Password" name="password_1">
			</div>
			<div class="input-group">
				<input type="submit" name="submit" value="LOGIN" class="btn-login">
			</div>
			<p class="login-register-text">Don't have an account? <a href="register-user.php">Register Here</a>.</p>
		</form>
	</div>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        
        $result = $pdo->prepare("SELECT FROM users WHERE username=?");
        $result->execute([$username]);
        $res = $result->fetch();

        $count = $result->rowCount();

        if($count>0){
            $_SESSION["login"] = "<div class='success'>Login Successful.</div>";
            header('location:'.SITEURL.'/index.php'); 
        }
        else{
            $_SESSION["login"] = "<div class='error text-center'>Username and Password Didn't Match.</div>";
            header('location:'.SITEURL.'/login-user.php'); 
        }

    }
?>