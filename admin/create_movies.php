<?php

$CONpath = $_SERVER['DOCUMENT_ROOT'];
$CONpath .= "/collage projects/min-mbs/db_connect.php";
require($CONpath);

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

        $sql = "INSERT INTO `movies` (`mov_title`, `mov_desc`, `CPD`) VALUES ('$mov_title', '$mov_desc', '$CPD')";
        $result = mysqli_query($conn, $sql);
        header('Location: admin_movies.php');
    }
}



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


        <form action="create_movies.php" method="post">

            <div class="movie-box">

                <label for="movie name">Movie Name :</label>
                <input type="text" name="Mtitle" id="" value="">

            </div>

            <div class="rating-box">

                <label for="rating">Price / Head :</label>
                <input type="number" step=".01" name="cpd" value="">

            </div>

            <div class="info-box">

                <label for="info">Add Description :</label>
                <textarea name="Mdesc" id=""></textarea>

            </div>

            <div class="btn-box">

                <a href="admin_movies.php" class="admin-back">Go Back</a>
                <button type="submit" class="submit">Add New</button>

            </div>

        </form>



    </div>

</div>

<?php
$Hpath = $_SERVER['DOCUMENT_ROOT'];
$Hpath .= "/collage projects/min-mbs/includes/admin_includes/admin_footer.php";
include_once($Hpath);
?>