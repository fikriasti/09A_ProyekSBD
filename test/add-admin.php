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
    <title>Add Admin - Chillflix</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Add Admin</p>
            <div class="input-group">
                <input type="text" placeholder="Enter your ID" name="id">
            </div>
            <div class="input-group">
                <input type="text" placeholder="Enter your Username" name="username" >
            </div>
            <div class="input-group">
                <input type="email" placeholder="Enter your Email" name="email" >
            </div>
            <div class="input-group">
                <input type="password" placeholder="Enter your Password" name="password" >
            </div>
            <div class="input-group">
                <input type="submit" name ="submit" value="submit" class="button">
            </div>
            <p class="login-register-text">Have an account? <a href="login-admin.php">Login Here</a>.</p>
        </form>
    </div>
</body>
</html>


<?php
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "INSERT INTO admin(id, username, email, password) VALUES (?,?,?,?)";

        $result = $pdo->prepare($sql)->execute([$id, $username, $email, $password]);

        if ($result==TRUE){
            $_SESSION['add'] = "Admin Added Succesfully";
            header("location:".SITEURL.'/login-admin.php');
        }
        else{
            $_SESSION['add'] = "Failed to Add Admin";
            header("location:".SITEURL.'/add-admin.php');
        }
    }

?>