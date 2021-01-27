<?php

$CONpath = $_SERVER['DOCUMENT_ROOT'];
$CONpath .= "/collage projects/min-mbs/db_connect.php";
require($CONpath);

$sno = $_GET['sno'];


$getSql = "SELECT * FROM `movies` WHERE mov_id = '$sno'";
$getResult = mysqli_query($conn, $getSql);


echo $newMtitle = $_POST['mov_title'];





// $movTitle


$Hpath = $_SERVER['DOCUMENT_ROOT'];
$Hpath .= "/collage projects/min-mbs/includes/admin_includes/admin_header.php";
include_once($Hpath);
?>

<!-- ADD-NEW-RUNNING-MOVIES-CONTENT -->
<div class="add-container">

    <div class="movie-adder">

        <h1>Add NEW MOVIE</h1>

        <form action="" method="post">

            <?php

            while ($getRow = mysqli_fetch_assoc($getResult)) : ?>

                <div class="movie-box">

                    <label for="movie name">Movie Name :</label>
                    <input type="text" name="Mtitle" id="" value="<?php echo $getRow['mov_title']; ?>">

                </div>

                <div class="rating-box">

                    <label for="rating">Price / Head :</label>
                    <input type="number" step=".01" name="cpd" value="<?php echo $getRow['CPD']; ?>">

                </div>

                <div class="info-box">

                    <label for="info">Add Description :</label>
                    <textarea name="Mdesc" id=""><?php echo $getRow['mov_desc']; ?></textarea>

                </div>

            <?php endwhile; ?>

            <div class="btn-box">

                <a href="admin_movies.php" class="admin-back">Go Back</a>
                <button type="submit" class="submit">Update</button>

            </div>

        </form>



    </div>

</div>

<!-- FOOTER -->
<div class="footer">

    <p>&copy; 2021 all rights to @MIN-BMS 🎭</p>

</div>

</body>

</html>