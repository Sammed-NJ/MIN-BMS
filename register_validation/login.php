<?php
$Hpath = $_SERVER['DOCUMENT_ROOT'];
$Hpath .= "/collage projects/min-mbs/includes/index_includes/main_hearder.php";
include_once($Hpath);
?>

<!-- LOGIN-CONTENT -->

<div class="content-log">

    <h1>MIN-BMS | LOGIN</h1>

    <div class="error">
        <p>Invalid Email ID/Password</p>
    </div>

    <form action="" method="get">

        <div class="email-box">

            <label for="email">Eamil :</label>
            <input type="email" name="" id="">

        </div>

        <div class="password-box">

            <label for="password">Password :</label>
            <input type="password" name="" id="">

        </div>

        <div class="submit-box">

            <button type="submit" class="submit">Log in</button>
            <p><a href="sginin.php" class="sign-btn">sign in</a> if you dont have account</p>

        </div>

    </form>

</div>

<?php
$Fpath = $_SERVER['DOCUMENT_ROOT'];
$Fpath .= "/collage projects/min-mbs/includes/index_includes/mian_footer.php";
include_once($Fpath);
?>