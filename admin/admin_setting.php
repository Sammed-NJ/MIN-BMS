<?php
$CONpath = $_SERVER['DOCUMENT_ROOT'];
$CONpath .= "/collage projects/min-mbs/db_connect.php";
require($CONpath);

$Hpath = $_SERVER['DOCUMENT_ROOT'];
$Hpath .= "/collage projects/min-mbs/includes/admin_includes/admin_header.php";
include_once($Hpath);
?>

<!-- ADMIN-CONTENT -->

<div class="admin-content">

    <h1>MIN-BMS | ADMIN</h1>

    <h3>Admin Name :</h3>
    <h3>Admin ID : <a href="#"></a> </h3>


    <p>This website is build and designed by the
        admin and can only person to control the website. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem id quae, voluptate architecto obcaecati esse nesciunt! Voluptates rerum et, ducimus, veniam architecto itaque ipsam unde molestias, sit cum vero nobis.</p>

    <?php

    session_start();
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

        echo '<a href="admin_logout.php" class="cancel">Log out</a>';
    }

    ?>

</div>

<?php
$Hpath = $_SERVER['DOCUMENT_ROOT'];
$Hpath .= "/collage projects/min-mbs/includes/admin_includes/admin_footer.php";
include_once($Hpath);
?>