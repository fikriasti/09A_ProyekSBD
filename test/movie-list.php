<?php
    include('config/constant.php');
?>

<!--doctype html-->
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<title>Personal Website</title>
<link rel="stylesheet" href="css/styleTabel.css">
<link rel="stylesheet" href="css/lightslider.css">
<script src= "js/JQuery3.3.1.js"></script>
<script src="js/lightslider.js"></script>
<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</head>

<body>
    <!--navigation-------------->
    <nav>
        <!--logo--------------->
        <a href="#" class="logo">
            <img src="chill.png"/>
        </a>
        <!--menu--btn----------------->
        <label class="menu-icon" for="menu-btn">
            <span class="nav-icon"></span>
        </label>
        <!--menu-------------->
        <ul class="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="movie-list.php">Movie List</a></li>
            <li><a href="movie-review.php">Movie Review</a></li>
            <li><a href="logout-user.php">Logout</a></li>
        </ul>
        <!--search------------->
        <div class="search">
            <input type="text" placeholder="Find Your Favorite Movies"/>
            <!--search-icon----------->
            <i class="fas fa-search"></i>
        </div>
    </nav>
    <section id="main">
        <!--showcase----------------------->
        <!--heading------------->
        <h1 class="showcase-heading">List Movies</h1>
        <table > 
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Genre</th>
                <th>Director</th>
                <th>Production House</th>
                <th>Age Rating</th>
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
                <?php
            }
            ?>
        </table>
    </section>
</body>
</html>