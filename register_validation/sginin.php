<?php

$CONpath = $_SERVER['DOCUMENT_ROOT'];
$CONpath .= "/collage projects/min-mbs/db_connect.php";
require($CONpath);

?>

<?php
$Hpath = $_SERVER['DOCUMENT_ROOT'];
$Hpath .= "/collage projects/min-mbs/includes/index_includes/main_hearder.php";
include_once($Hpath);
?>
<div class="alert">

    <p> <span>SUCCES!</span> Your account has been created now login to continue booking movies</p>

</div>


<!-- SIGNIN-CONTENT -->

<div class="content-sign">

    <h1>MIN-BMS | SINGIN</h1>


    <form action="sginin.php" method="post">

        <div class="email-box">

            <label for="email">Eamil :</label>
            <input type="email" name="userId" value="">

        </div>

        <div class="password-box">

            <label for="password">Password :</label>
            <input type="password" name="password" id="">

        </div>

        <div class="password-box">

            <label for="password">Confirm Password :</label>
            <input type="password" name="confirmPassword" id="">

        </div>

        <div class="submit-box">

            <button type="submit" href="#" class="submit">Sign in</button>
            <p><a href="login.php" class="log-btn">login</a> if you alrrady have account</p>

        </div>

    </form>

</div>

<?php
$Fpath = $_SERVER['DOCUMENT_ROOT'];
$Fpath .= "/collage projects/min-mbs/includes/index_includes/mian_footer.php";
include_once($Fpath);
?>