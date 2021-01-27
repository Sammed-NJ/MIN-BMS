<?php

// $CONpath = $_SERVER['DOCUMENT_ROOT'];
// $CONpath .= "/collage projects/min-mbs/db_connect.php";
// require($CONpath);

require 'db_connect.php';

$showAlert = false;
$showError = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $userName = $_POST['Uname'];
    $password = $_POST['password'];
    $Cpassword = $_POST['Cpassword'];

    if (empty($userName)) {

        $showError = 'Enter Your User Name!';
    }

    if (empty($password)) {

        $showError = 'Enter Your User Password!';
    }

    // $exists = false;

    $existSql = "SELECT * FROM `users` WHERE uName = '$userName'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if ($numExistRows > 0) {

        // $exits = true;
        $showError = 'Username Already Exists';
    } else {

        // $exists = false;
        if (($password == $Cpassword)) {
            if (!empty($userName) && !empty($password) && !empty($Cpassword)) {

                $sql = "INSERT INTO `users` ( `uName`, `password`, `time_stamp`) VALUES ('$userName', '$password', current_timestamp())";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    $showAlert = true;
                }
            }
        } else {
            $showError = "Password Don't Match OR Enter Password!";
        }
    }
}


$Hpath = $_SERVER['DOCUMENT_ROOT'];
$Hpath .= "/collage projects/min-mbs/includes/index_includes/main_hearder.php";
include_once($Hpath);

?>
<?php

if ($showAlert) {
    echo '
    <div class="alert">

    <p> <span>SUCCES!</span> Your account has been created now login to continue booking movies</p>

    </div>
    ';
}

if ($showError) {
    echo '
    <div class="not-alert">

    <p> <span>ERROR!</span> ' . $showError . '</p>

    </div>
    ';
}

?>


<!-- SIGNIN-CONTENT -->

<div class="content-sign">

    <h1>MIN-BMS | SINGIN</h1>


    <form action="sginin.php" method="post">

        <div class="email-box">

            <label for="email">User Nmae :</label>
            <input type="text" name="Uname" value="" placeholder="User Name">

        </div>

        <div class="password-box">

            <label for="password">Password :</label>
            <input type="password" name="password" id="" placeholder="Password">

        </div>

        <div class="password-box">

            <label for="password">Confirm Password :</label>
            <input type="password" name="Cpassword" id="" placeholder="Confirm Password">

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