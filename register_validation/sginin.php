<?php

$CONpath = $_SERVER['DOCUMENT_ROOT'];
$CONpath .= "/collage projects/min-mbs/db_connect.php";
require($CONpath);

// echo '<pre>';
// var_dump();
// echo '</pre>';
// exit;

$signinErrors = [];
$userID = '';
$password = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $userID = $_POST['userId'];
    $password = $_POST['password'];

    if (!$userID) {
        $signinErrors[] = 'Email ID is Requaierd';
    }

    if (!$password) {
        $signinErrors[] = 'Password is Requaierd';
    }

    if (empty($signinErrors)) {

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $statement = $pdo->prepare("INSERT INTO users (email_Id, password) 
        VALUES (:userID, :password)");

        $statement->bindValue(':userID', $userID);
        $statement->bindValue(':password', $hashedPassword);
        $statement->execute();
        header('Location: index.php');
    }
}

?>

<?php
$Hpath = $_SERVER['DOCUMENT_ROOT'];
$Hpath .= "/collage projects/min-mbs/includes/index_includes/main_hearder.php";
include_once($Hpath);
?>

<!-- SIGNIN-CONTENT -->

<div class="content-sign">

    <h1>MIN-BMS | SINGIN</h1>

    <?php if (!empty($signinErrors)) : ?>

        <div class="error">

            <?php foreach ($signinErrors as $signinErrors) : ?>
                <p><?php echo $signinErrors ?></p>
            <?php endforeach; ?>

        </div>

    <?php endif; ?>

    <form action="sginin.php" method="post">

        <div class="email-box">

            <label for="email">Eamil :</label>
            <input type="email" name="userId" value="<?php echo $userID; ?>">

        </div>

        <div class="password-box">

            <label for="password">Password :</label>
            <input type="password" name="password" id="">

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