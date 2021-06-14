<?php
    include('partials/menu.php');
?>

<!--- Main --->
<div class="main">
            <div class="wrapper">
                <h1 style="font-size:25px">Manage Reviews and Ratings</h1>
                
                <br></br>                                        
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
</div>

<?php
    include('partials/footer.php');
?>
