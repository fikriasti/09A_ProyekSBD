<?php
    include('partials/menu.php');
?>

        <!--- Main --->
        <div class="main">
            <div class="wrapper">
                <h1 style="font-size:25px">Manage Movies</h1>
                
                <br></br>

                <?php
                    if(isset($_SESSION['add'])){
                        echo $_SESSION['add'];
                        unset($_SESSION['add']);
                    }
                ?>


                <br><br>

                <a href="add-movies.php" class="btn-primary">Add Movies</a>
                </br><br></br>
                    
                <table class="tbl">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Genre</th>
                        <th>Director</th>
                        <th>Production House</th>
                        <th>Age Ratings</th>
						<th>Actions</th>
                    </tr>

                    <?php

                     $result = $pdo->query("SELECT * FROM movie")->fetchAll();

                        foreach ($result as $row) {
                            ?>
                                <?php
                                    $id = $row ['id_film'];
                                    $title = $row ['judul_film'];
                                    $genre = $row ['genre'];
                                    $sutradara = $row ['sutradara'];
                                    $production_house = $row ['production_house'];
                                    $usia_penonton = $row['usia_penonton'];
                                ?>
                                <tr>
                                <td><?php echo $id; ?></td>
                                <td><?php echo $title; ?></td>
                                <td><?php echo $genre; ?></td>
                                <td><?php echo $sutradara; ?></td>
                                <td><?php echo $production_house; ?></td>
                                <td><?php echo $usia_penonton; ?></td>
                                <td>
                                    <a href="update-movies.php" class="btn-primary">Update Movies</a>
                                    <a href="delete-movies.php" class="btn-primary">Delete Movies</a>
                                </td>
                                   

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