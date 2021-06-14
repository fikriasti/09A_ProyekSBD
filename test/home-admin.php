
<?php 
    include ('partials/menu.php');
?>
        <!--- Main --->
        <div class="main">
            <div class="wrapper">
                <h1 style="font-size:25px">DASHBOARD</h1>
                <br><br>
                <?php
                    if(isset($_SESSION['login'])){
                        echo $_SESSION['login'];
                        unset($_SESSION['login']);
                    }
                ?>

                <?php
                        if(isset($_SESSION['add'])){
                        echo $_SESSION['add'];
                        unset($_SESSION['add']);
                    }
                ?>
                <br><br>

                <div class="col-4 text-center">
                    <?php
                        $result = $pdo->query("SELECT COUNT(*) FROM admin");
                        $result->execute();
                        $row = $result->fetch(PDO::FETCH_ASSOC);
                    ?>
                    <h1><?phpecho $row?></h1>
                    <br />
                    Admins
                </div>
                <div class="col-4 text-center">
                    <?php
                        $result = $pdo->query("SELECT COUNT(*) FROM movie");
                        $result->execute();
                        $row = $result->fetch(PDO::FETCH_ASSOC);
                    ?>
                    <h1><?phpecho $row?></h1>
                    <br />
                    Movies
                </div>
                <div class="col-4 text-center">
                    <?php
                        $result = $pdo->query("SELECT COUNT(*) FROM user");
                        $result->execute();
                        $row = $result->fetch(PDO::FETCH_ASSOC);
                    ?>
                    <h1><?phpecho $row?></h1>
                    <br />
                    Users
                </div>
            <div class="clearfix"></div>
            </div>    
        </div>

<?php
    include('partials/footer.php');
?>