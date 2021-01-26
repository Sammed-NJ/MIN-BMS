<?php

$CONpath = $_SERVER['DOCUMENT_ROOT'];
$CONpath .= "/collage projects/min-mbs/db_connect.php";
require($CONpath);

$Hpath = $_SERVER['DOCUMENT_ROOT'];
$Hpath .= "/collage projects/min-mbs/includes/admin_includes/admin_header.php";
include_once($Hpath);
?>

<!-- ADD-NEW-RUNNING-MOVIES-CONTENT -->
<div class="add-container">

    <div class="movie-adder">

        <h1>Add NEW MOVIE</h1>


        <form action="create_movies.php" method="post">

            <div class="movie-box">

                <label for="movie name">Movie Name :</label>
                <input type="text" name="mName" id="" value="">

            </div>

            <div class="rating-box">

                <label for="rating">Price / Head :</label>
                <input type="number" step=".01" name="cost" value="">

            </div>

            <div class="info-box">

                <label for="info">Add Description :</label>
                <textarea name="description" id=""></textarea>

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