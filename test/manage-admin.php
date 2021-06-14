<?php
    include('partials/menu.php');
?>

        <!--- Main --->
        <div class="main">
            <div class="wrapper">
                <h1 style="font-size:25px">Manage Admin</h1>

                <br></br>


                <?php
                    if(isset($_SESSION['delete'])){
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }
                ?>
                

                <table class="tbl">
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>

                    <?php
                
                        $result = $pdo->query("SELECT * FROM admin")->fetchAll();

                        foreach ($result as $row) {
                            ?>
                                <?php
                                    $id = $row['id'];
                                    $username = $row['username'];
                                    $email = $row['email'];
                                    $password = $row['password'];
                                ?>
                                <tr>
                                    <td><?php echo $row["username"] ?></td>
                                    <td><?php echo $row["email"]; ?></td>
                                    <td>
                                        <a href="update-admin.php" class="btn-primary">Update Admin</a>
                                        <a href="delete-admin.php" class="btn-primary">Delete Admin</a>
                                    </td>
                                </tr>
                                

                            <?php
                        }

                            



                    ?>

                </table>
                <div class="clearfix"></div>
            </div>    
        </div>

<?php
    include('partials/footer.php');
?>