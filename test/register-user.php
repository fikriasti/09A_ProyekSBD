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
	<title>Register - Chillflix</title>
</head>

<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Enter your Username" name="username">
			</div>
			<div class="input-group">
				<input type="email" placeholder="Enter your Email" name="email" >
			</div>
			<div class="input-group">
				<input type="date" placeholder="Enter your Birth" name="birth" >
            </div>
			<div class="input-group">
				<input type="text" placeholder="Enter your Number Phone" name="handphone">
            </div>
            <div class="input-group">
				<input type="password" placeholder="Enter your Password" name="password_1" >
			</div>
            <div class="input-group">
				<input type="password" placeholder="Confirm your Password" name="password_2" >
			</div>
			<div class="input-group">
				<input type="submit" name ="submit" value="submit" class="button">
			</div>
			<p class="login-register-text">Have an account? <a href="login-user.php">Login Here</a>.</p>
		</form>
		<?php
    if(isset($_POST['submit'])){
        $sql = "INSERT INTO users (username,email,birth,handphone,password_1,password_2) VALUES (?,?,?,?,?,?)";
        $result = $pdo->prepare($sql)->execute([$_POST['username'], $_POST['email'], $_POST['birth'], $_POST['handphone'], $_POST['password_1'], $_POST['password_2']]);    
		
		if ($result==TRUE){
            $_SESSION['add'] = "Admin Added Succesfully";
            header("location:".SITEURL.'/index.php');
        }
        else{
            $_SESSION['add'] = "Failed to Add Admin";
            header("location:".SITEURL.'/register-user.php');
        }
	}
?>
	</div>
</body>
</html>
