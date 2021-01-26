<?php

$CONpath = $_SERVER['DOCUMENT_ROOT'];
$CONpath .= "/collage projects/min-mbs/db_connect.php";
require($CONpath);

// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';
// exit;


$pathIN = $_SERVER['DOCUMENT_ROOT'];
$pathIN .= "/collage projects/min-mbs/index.php";


$loginErrors = [];
$userID = '';
$password = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $userID = $_POST['userId'];
    $password = $_POST['password'];

    // $vp = password_verify($password, $vpassword);

    if (!$userID) {
        $loginErrors[] = 'Email ID is Requaierd';
    }

    if (!$password) {
        $loginErrors[] = 'Password is Requaierd';
    }

    if (empty($signinErrors)) {
        $statement = $pdo->prepare("SELECT * FROM users WHERE email_Id = :userId AND password = :password");
        $statement->bindValue(':userId', $userID);
        $statement->bindValue(':password', $password);
        $statement->execute();
        $count = $statement->rowCount();
        if ($count > 0) {
            $_SESSION['email_id'] = $_POST['userId'];
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['email_Id'] = $userID;
            header('Location: /collage%20projects/min-mbs/index.php');
        } else {
            $loginErrors[] = 'Email / Password is Wrong!';
        }
    }
}



?>

<?php
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

    <form action="" method="post">

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