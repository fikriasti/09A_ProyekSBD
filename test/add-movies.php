<?php
    include('partials/menu.php');
?>

    <div class="main">
            <div class="wrapper">
                <h1 style="font-size:25px">Add Movies</h1>
            
                <br></br>

                <?php
                    if(isset($_SESSION['add'])){
                        echo $_SESSION['add'];
                        unset($_SESSION['add']);
                    }
                ?>

            <form action="" method="POST"enctype="multipart/form-data">
                <table class="tbl-admin">
                    <tr>
                        <td>Title: </td>
                        <td>
                            <input type="text" name="judul_film" placeholder="input title of movies">
                        </td>
                    </tr>

                    <tr>
                            <td>Genre: </td>
                            <td>
                                <select name="genre">
                                    <option value="Romance">Romance</option>
          
		  <option value="Horror">Horror</option>
                                    <option value="Family">Family</option>
                            </td>
                    </tr>

                    <tr>
                        <td>ID Film: </td>
                        <td>
                            <input type="number" name="id_film" placeholder="input id of movies">
                        </td>
                    </tr>

                    <tr>
                        <td>Director: </td>
                        <td>
                            <input type="text" name="sutradara" placeholder="input director of movies">
                        </td>
                    </tr>

                    <tr>
                        <td>Production House: </td>
                        <td>
                            <input type="text" name="production_house" placeholder="input production_house of movies">
                        </td>
                    </tr>

                    <tr>
                        <td>Age Rating: </td>
                        <td>
                            <select name="usia_penonton">
                                <option value="SU">SU</option>
                                <option value="R13+">R13+</option>
                                <option value="D17+">D17+</option>
                        </td>
                    </tr>


                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Add Movies" class="btn-primary">
                        </td>
                    </tr>

                    
                </table>

               </div>
</div>

<?php
    include('partials/footer.php');
?>

<?php
    if(isset($_POST['submit'])){
           $sql = "INSERT INTO movie (judul_film,genre,id_film,sutradara,production_house, usia_penonton) VALUES (?,?,?,?,?,?)";
           $result = $pdo->prepare($sql)->execute([$_POST['judul_film'], $_POST['genre'], $_POST['id_film'], $_POST['sutradara'], $_POST['production_house'], $_POST['usia_penonton']]);    

            if ($result==TRUE){
                $_SESSION['add'] = "Movie Added Succesfully";
                header("location:".SITEURL.'/manage-movies.php');
            }
            else{
                $_SESSION['add'] = "Failed to Add Admin";
                header("location:".SITEURL.'/add-movies.php');
            }
    }
?>

