
<?php
    include('partials/menu.php');
?>

<?php
if (isset($_GET['id_film'])){
    $id = $_SESSION['id_film'];
    $stmt = $pdo->query("SELECT * FROM movie WHERE id_film=?");
    $stmt->execute([$id]);
    $update = $stmt->fetch(); 
    $title = $update['judul_film'];
    $genre = $update['genre'];
    $sutradara = $update['sutradara'];
    $production_house = $update['production_house'];
    $usia_penonton = $update['usia_penonton'];
}                 
?>

<div class="main-content">
        <div class="wrapper">
            <h1> Update Movies</h1>

            <br></br>

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
                        <td>Director: </td>
                        <td>
                            <input type="text" name="sutradara" placeholder="input director of movies">
                        </td>
                    </tr>

                    <tr>
                        <td>Production House: </td>
                        <td>
                            <input type="text" name="production_house" placeholder="input production house of movies">
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
                            <input type="submit" name="submit" value="Update Movies" class="btn-primary">
                        </td>
                    </tr>

                    
                </table>
                </form>

                <?php
                if (isset($_POST['submit'])){

                    
                    $sql = "UPDATE movie SET judul_film=?, genre=?, sutradara=?, production_house=?, usia_penonton=? WHERE id_film=?";
                    $result= $pdo->query($sql);
                   // $result = $pdo->prepare($sql)->execute([$_POST['judul_film'], $_POST['genre'], $_POST['sutradara'], $_POST['production_house'], $_POST['usia_penonton'], $_POST['id_film']]);   
                        if ($result==TRUE){
                            $_SESSION['update'] = "Movie Updated Succesfully";
                            header('location:manage-movies.php?');
                        }
                        else{
                            $_SESSION['update'] = "Failed to Update Movie";
                            header('location:manage-movies.php?');
                        }
                    }

                    ?>
            </div>
    </div>
</div>

<?php
    include('partials/footer.php');
?>