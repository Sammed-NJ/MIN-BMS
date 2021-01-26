<?php

require 'db_connect.php';

$Hpath = $_SERVER['DOCUMENT_ROOT'];
$Hpath .= "/collage projects/min-mbs/includes/index_includes/main_hearder.php";
include_once($Hpath);

?>

<!-- LOGIN-CONTENT -->

<div class="content-log">

    <h1>MIN-BMS | LOGIN</h1>

    <?php if (!empty($loginErrors)) : ?>

        <div class="error">

            <?php foreach ($loginErrors as $loginErrors) : ?>
                <p><?php echo $loginErrors ?></p>
            <?php endforeach; ?>

        </div>

    <?php endif; ?>

    <form action="login.php" method="post">

        <div class="email-box">

            <label for="email">Eamil :</label>
            <input type="email" name="userId" id="">

        </div>

        <div class="password-box">

            <label for="password">Password :</label>
            <input type="password" name="password" id="">

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