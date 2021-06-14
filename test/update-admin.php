<?php
    include('partials/menu.php');
?>

<div class="main">
            <div class="wrapper">
                <h1 style="font-size:25px">Update Admin</h1>
                
                <br></br>

                <?php
                    
                ?>
                <form action="" method="POST">

                    <table class="tbl-admin">
                        <tr>
                            <td>Username:</td>
                            <td><input type="text" name="username" placeholder="Enter Your Username"></td>
                        </tr>

                        <tr>
                            <td>Email:</td>
                            <td><input type="text" name="email" placeholder="Enter Your E-Mail"></td>
                        </tr>

                        <tr>
                            <td colspan="2"> 
                                <input type="submit" name="submit" value="Update" class="btn-primary">
                            </td>
                        </tr>
                    </table>
                </form>

                <div class="clearfix"></div>
            </div>    
        </div>

<?php
    include('partials/footer.php');
?>

<?php
    if(isset($_POST['submit'])){
        $sql = "INSERT INTO admin(username, email, password) VALUES (?,?,?)";
        $result = $pdo->prepare($sql)->execute([$_POST['username'], $_POST['email'], $_POST['password']]);  

    }

?>