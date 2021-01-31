<?php

$CONpath = $_SERVER['DOCUMENT_ROOT'];
$CONpath .= "/collage projects/min-mbs/db_connect.php";
require($CONpath);


// getting to date from db
$id = $_GET['id'];

$upsqli = "SELECT * FROM `movies` WHERE mov_id = '$id'";
$result = mysqli_query($conn, $upsqli);
$row = mysqli_fetch_assoc($result);

$mov_title = $row['mov_title'];
$mov_cpd = $row['CPD'];
$mov_dec = $row['mov_desc'];

// updating the the data to db

$emptyError = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $mov_title = $_POST['Mtitle'];
    $CPD = $_POST['cpd'];
    $mov_desc = $_POST['Mdesc'];

    if (empty($mov_title)) {

        $emptyError = 'Enter Movie Name!';
    }

    if (empty($CPD)) {

        $emptyError = 'Enter Cost / Head!';
    }

    if (empty($mov_desc)) {

        $emptyError = 'Enter Movie Description!';
    }

    if (!empty($mov_title) && !empty($mov_desc) && !empty($CPD)) {

        $sql = "UPDATE `movies` SET `mov_title` = '$mov_title', `CPD` = '$CPD', `mov_desc` = '$mov_desc' WHERE `movies`.`mov_id` = '$id'";
        $result = mysqli_query($conn, $sql);
        header('Location: admin_movies.php');
        // UPDATE `movies` SET `mov_title` = '', `CPD` = '', `create_date` = TIMESTAMP('') WHERE ``.`mov_id` = '';
    }
}



$Hpath = $_SERVER['DOCUMENT_ROOT'];
$Hpath .= "/collage projects/min-mbs/includes/admin_includes/admin_header.php";
include_once($Hpath);

$Hpath = $_SERVER['DOCUMENT_ROOT'];
$Hpath .= "/collage projects/min-mbs/includes/admin_includes/admin_header.php";
include_once($Hpath);

if ($emptyError) {
    echo '
    <div class="not-alert">

    <p> <span>ERROR!</span> ' . $emptyError . '</p>

    </div>
    ';
}
?>

<!-- ADD-NEW-RUNNING-MOVIES-CONTENT -->
<div class="add-container">

    <div class="movie-adder">

        <h1>Add NEW MOVIE</h1>

        <form action="" method="post">


            <div class="movie-box">

                <label for="movie name">Movie Name :</label>
                <input type="text" name="Mtitle" id="" value="<?php echo $mov_title ?>">

            </div>

            <div class="rating-box">

                <label for="rating">Price / Head :</label>
                <input type="number" step=".01" name="cpd" value="<?php echo $mov_cpd; ?>">

            </div>

            <div class="info-box">

                <label for="info">Add Description :</label>
                <textarea name="Mdesc" id=""><?php echo $mov_dec; ?></textarea>

            </div>


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