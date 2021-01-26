<?php

$CONpath = $_SERVER['DOCUMENT_ROOT'];
$CONpath .= "/collage projects/min-mbs/db_connect.php";
require($CONpath);

$Hpath = $_SERVER['DOCUMENT_ROOT'];
$Hpath .= "/collage projects/min-mbs/includes/admin_includes/admin_header.php";
include_once($Hpath);
?>

<!-- MOVIES-CONTENT -->

<div class="content">

    <h1>
        MIN-BMS | ADMIN
    </h1>

    <div class="box">

        <div class="boxs">

            <h2></h2>
            <h2>ACTIVE USERS</h2>

        </div>

        <div class="boxs">

            <h2></h2>
            <h2>MOVIES RUNNING</h2>

        </div>

        <div class="boxs">

            <h2>4</h2>
            <h2>TOTAL BOOKINGS</h2>

        </div>

    </div>

</div>

<?php
$Hpath = $_SERVER['DOCUMENT_ROOT'];
$Hpath .= "/collage projects/min-mbs/includes/admin_includes/admin_footer.php";
include_once($Hpath);
?>