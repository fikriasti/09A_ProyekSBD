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
         <!--- Main --->
         <div class="main">
            <div class="wrapper">
                <h1 class="showcase-heading">Review and Rating</h1>

                    <br /><br />
                    <br /><br /><br />
                                            
                    <table class="tbl">
                        <tr>
                            <th>Movie Title</th>
                            <th>Review</th>
                            <th>Rating</th>
                        </tr>

                        <?php

                        $result = $pdo->query("SELECT * FROM review ORDER BY judul_film ASC")->fetchAll();

                            foreach ($result as $row) {
                                ?>
                                    <?php
                                        $judul_film = $row ['judul_film'];
                                        $review = $row ['review'];
                                        $rating = $row ['rating'];
                                    ?>
                                    <tr>
                                    <td><?php echo $judul_film; ?></td>
                                    <td><?php echo $review; ?></td>
                                    <td><?php echo $rating; ?></td>
                                    </td>
                                    <tr>
                                <?php
                            }
                            ?>
                    </table>
                <div class="clearfix"></div>
            </div>   

 
    </section>
</body>
</html>
