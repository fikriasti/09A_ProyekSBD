<!--doctype html-->
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<title>Personal Website</title>
	<!--style----->
	<style>
		body{
			font-family:poppins;
		}
	</style>
<link rel="stylesheet" href="css/stylemovie.css">
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
        <input type="checkbox" class="menu-btn" id="menu-btn"/>
        <label class="menu-icon" for="menu-btn">
            <span class="nav-icon"></span>
        </label>
        <!--menu-------------->
        <ul class="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="movie-list.php">Movie List</a></li>
            <li><a href="movie-review.php">Movie Review</a></li>
            <li><a href="logout-user">Logout</a></li>
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
        <h1 class="showcase-heading">Showcase</h1>
        
        <ul id="autoWidth" class="cs-hidden">
        
        <!--box-1--------------------------->
        <li class="item-a">
            <!--showcase-box------------------->
           <div class="showcase-box">
               <img src="images/show-1.png"/>
           </div>
               </li>
            <!--box-2--------------------------->
            <li class="item-b">
                <!--showcase-box------------------->
               <div class="showcase-box">
                   <img src="images/s-2.jpg"/>
               </div>
                   </li>
                <!--box-3--------------------------->
            <li class="item-c">
                <!--showcase-box------------------->
               <div class="showcase-box">
                   <img src="images/s-3.jpg"/>
               </div>
                   </li>
                <!--box-4--------------------------->
            <li class="item-d">
                <!--showcase-box------------------->
               <div class="showcase-box">
                   <img src="images/s-4.jpg"/>
               </div>
                   </li>
                   <!--box-5--------------------------->
            <li class="item-e">
                <!--showcase-box------------------->
               <div class="showcase-box">
                   <img src="images/s-5.png"/>
               </div>
                   </li>
          </ul>
        
    </section>
    
    <script>
        $(document).ready(function(){
            $('#autoWidth').lightSlider({
                autoWidth:true,
                loop:true,
                onSliderLoad: function(){
                    $('#autoWidth').removeClass('cS-hidden');
                }
            });
        });
    </script>

    <!--movies---------------------------->
    <div class="movies-heading">
        <h2>Romance</h2>
    </div>
    <section id="movies-list">
        <!--box-1------------------------>
        <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">BO</div>
                <img src="images/im-1.jpg">
            </div>
            <!--text--------->
            <a href="https://www.youtube.com/watch?v=9ItBvH5J6ss">
                The Fault in Our Stars (2014)
            </a>
        </div>
         <!--box-2------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">BO</div>
                <img src="images/im-2.jpg">
            </div>
            <!--text--------->
            <a href="https://www.youtube.com/watch?v=3c_McS4_2A8">
                Ada Apa Dengan Cinta? 2 (2016)
            </a>
        </div>
         <!--box-3------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">BO</div>
                <img src="images/im-3.jpg">
            </div>
            <!--text--------->
            <a href="https://www.youtube.com/watch?v=nwhB2Hb7g5c">
                Dilan 1991 (2019)
            </a>
        </div>
         <!--box-4------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">BO</div>
                <img src="images/im-4.jpg">
            </div>
            <!--text--------->
            <a href="https://www.youtube.com/watch?v=nwhB2Hb7g5c">
                Habibi dan Ainun 3 (2019)
            </a>
            
    </section>
    <p></p>

<!-- HOROR----------------------- -->
    <div class="movies-heading">
        <h2>HORROR</h2>
    </div>
    <section id="movies-list">
        <!--box-1------------------------>
        <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">R</div>
                <img src="images/ih-1.jpg">
            </div>
            <!--text--------->
            <a href="https://www.youtube.com/watch?v=guNX8nOdpaI">
                Annabelle (2014)
            </a>
        </div>
         <!--box-2------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">R</div>
                <img src="images/ih-2.jpg">
            </div>
            <!--text--------->
            <a href="https://www.youtube.com/watch?v=h9Q4zZS2v1k">
                The Conjuring : The Devil Made Me Do It (2021)
            </a>
        </div>
         <!--box-3------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">R</div>
                <img src="images/ih-3.jpg">
            </div>
            <!--text--------->
            <a href="https://www.youtube.com/watch?v=V6wWKNij_1M">
                Hereditary (2018)
            </a>
        </div>
    </section>
<p></p>

<!-- FAMILY------------ -->
    <div class="movies-heading">
        <h2>FAMILY</h2>
    </div>
    <section id="movies-list">
        <!--box-1------------------------>
        <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">SU</div>
                <img src="images/if-1.jpg">
            </div>
            <!--text--------->
            <a href="https://www.youtube.com/watch?v=1VIZ89FEjYI">
                Raya and the Last Dragon (2021)
            </a>
        </div>
         <!--box-2------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">SU</div>
                <img src="images/if-2.jpg">
            </div>
            <!--text--------->
            <a href="https://www.youtube.com/watch?v=TcHh986XvI4">
                Nanti Kita Cerita Tentang Hari Ini (2020)
            </a>
        </div>
         <!--box-3------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">SU</div>
                <img src="images/if-3.jpg">
            </div>
            <!--text--------->
            <a href="https://www.youtube.com/watch?v=wmiIUN-7qhE">
                Toy Story 4 (2019)
            </a>
    </section>
    <p></p>

<!--btns--------------->
    <div class="btns">
        <a href="add-review">Review</a>
    </div>

    <!--footer------------------>
    <footer>
        <p>Design By Kelompok 9A, Sistem Basis Data</p>
        <p>Teknik Komputer 2019</p>
    </footer>
</body>
</html>