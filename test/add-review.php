<?php
    include('config/constant.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/styleReview.css">
	<link rel="stylesheet" type="text/css" href="css/styleReview2.css">
	<title>Comment System in PHP - Pure Coding</title>
	<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</head>
<body>
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
		<h1 class="showcase-heading">Review</h1>
		<div class="wrapper">
			<form action="" method="POST" class="form">
				<div class="row">
					<div class="input-group">
						<label for="name">Movie Title</label>
						<input type="text" name="name" id="name" placeholder="Enter your Name" required>
					</div>
					<div class="input-group">
						<label for="rating">Rating</label>
                        <select name="rating" id="select">
                                    <option value="1">1</option>
                                    <option value="1.5">1.5</option>
                                    <option value="2">2</option>
                                    <option value="2.5">2.5</option>
                                    <option value="3">3</option>
                                    <option value="3.5">3.5</option>
                                    <option value="4">4</option>
                                    <option value="4.5">4.5</option>
                                    <option value="5">5</option>
                        </select>
					</div>
				</div>
				<div class="input-group textarea">
					<label for="comment">Review</label>
					<textarea id="comment" name="comment" placeholder="Enter your Comment" required></textarea>
				</div>
				<div class="input-group">
					<button name="submit" class="btn">Post Comment</button>
				</div>
			</form>
			<div class="prev-comments">
			</div>
		</div>
	</section>
</body>
</html>


<?php
    if(isset($_POST['submit'])){
           $sql = "INSERT INTO review (judul_film, review, rating) VALUES (?,?,?)";
           $result = $pdo->prepare($sql)->execute([$_POST["judul_film"], $_POST["review"], $_POST["rating"]]); 
            if($result == true){
                $_SESSION['add'] = "Review Updated Successfully!";
                header("location:".SITEURL.'/movie-review.php');
            }
            else {
                $_SESSION['add'] = "Failed to Add Review";
                header("location:".SITEURL.'/movie-review.php');
            }
    }
    ?>

</body>
</html>