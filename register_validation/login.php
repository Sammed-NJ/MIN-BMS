<?php

// $CONpath = $_SERVER['DOCUMENT_ROOT'];
// $CONpath .= "/collage projects/min-mbs/db_connect.php";
// require($CONpath);

require 'db_connect.php';

$login = false;
$showError = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $userName = $_POST['Uname'];
    $password = $_POST['password'];
    $exists = false;

    if (empty($userName)) {

        $showError = 'Enter Your User Name!';
    }

    if (empty($password)) {

        $showError = 'Enter Your User Password!';
    }
    $sql = "SELECT * FROM users WHERE uName = '$userName' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    $sqlAdmin = "SELECT * FROM admin WHERE admin_name = '$userName' AND password = '$password'";
    $resultAdmin = mysqli_query($conn, $sqlAdmin);
    $numAdmin = mysqli_num_rows($resultAdmin);
    if ($numAdmin == 1) {
        $login = true;

        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['Uname'] = $userName;
        header('Location: /collage projects/min-mbs/admin/admin_index.php');
    } else {
        $showError = "Invalid Credentials!";
    }

    if ($num == 1) {
        $login = true;

        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['Uname'] = $userName;
        header('Location: /collage projects/min-mbs/index.php');
    } else {
        $showError = "Invalid Credentials!";
    }
}


$Hpath = $_SERVER['DOCUMENT_ROOT'];
$Hpath .= "/collage projects/min-mbs/includes/index_includes/main_hearder.php";
include_once($Hpath);

?>

<?php
if ($login) {
    echo '
    <div class="alert">

    <p> <span>SUCCES!</span> You are Logged in!</p>

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

<!-- LOGIN-CONTENT -->

<div class="content-log">

    <h1>MIN-BMS | LOGIN</h1>


    <form action="login.php" method="post">

        <div class="email-box">

            <label for="name">User Name :</label>
            <input type="text" name="Uname" id="">

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