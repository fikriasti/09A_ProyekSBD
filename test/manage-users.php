<?php
    include('partials/menu.php');
?>

        <!--- Main --->
        <div class="main">
            <div class="wrapper">
                <h1 style="font-size:25px">Manage Users</h1>


                <br></br>

                <table class="tbl">
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Birth Date</th>
                        <th>Phone Number</th>
                    </tr>

                    <?php

                     $result = $pdo->query("SELECT * FROM users")->fetchAll();

                        foreach ($result as $row) {
                            ?>
                                <?php
                                    $username = $row ['username'];
                                    $email = $row ['email'];
                                    $birth = $row ['birth'];
                                    $handphone = $row ['handphone'];
                                ?>
                                <tr>
                                <td><?php echo $username; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $birth; ?></td>
                                <td><?php echo $handphone; ?></td>
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