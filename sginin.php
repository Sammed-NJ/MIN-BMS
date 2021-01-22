<?php
require "db_connect.php";

$signErrors = [];
$uID = '';
$password = '';

// echo '<pre>';
// var_dump($_SERVER);
// echo '</pre>';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $uID = $_POST['userId'];
    $password = $_POST['password'];
    $time_stamp = date('Y-m-d H:m:s');

    if (!$uID) {
        $signErrors[] = 'User ID is Required';
    }

    if (!$password) {
        $signErrors[] = 'Password Required';
    }

    if (empty($signErrors)) {

        $statement = $pdo->prepare("INSERT INTO users (email_Id, password, time_stamp) 
    VALUES (:userID, :password, :time_stamp)");

        $statement->bindValue(':userID', $uID);
        $statement->bindValue(':password', $password);
        $statement->bindValue(':time_stamp', $time_stamp);
        $statement->execute();
        //         // header('Location: index.php');
    }
}

// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIN-BMS 🎭</title>

    <!-- CSS-STYLES -->
    <link rel="stylesheet" href="css/global_styles.css">

    <!-- GOOGLE-FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- ALL TEXT FACE 'Poppins' -- SPECIAL TEXT FACE 'Yellowtail' -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Yellowtail&display=swap" rel="stylesheet">

</head>

<body>

    <!-- BG-VIDEO -->
    <section class="showcase">

        <video src="resrc/bg_video.mp4" muted loop autoplay></video>

    </section>

    <!-- NAVBAR -->
    <div class="navbar">

        <div class="container">

            <div class="nav-logo"> <a href="index.php">MIN-BMS 🎭</a> </div>

            <div class="nav-list">
                <a href="index.php" class="nav-links">Home</a>
                <a href="about.php" class="nav-links">About</a>
                <a href="movies.php" class="nav-links">Movies</a>
                <a href="my_movies.php" class="nav-links">My Movies</a>

                <!-- TODO -->
                <!-- change the text in this from 'login' to 'Welcom User Name' after the user logs or sign in -->
                <a href="login.php" class="nav-links">Login</a>

            </div>

        </div>

    </div>

    <!-- SIGNIN-CONTENT -->

    <div class="content-sign">

        <h1>MIN-BMS | SINGIN</h1>

        <?php if (!empty($signErrors)) : ?>
            <div class="error">
                <?php foreach ($signErrors as $signErrors) : ?>
                    <p><?php echo $signErrors ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif ?>

        <form action="sginin.php" method="get">

            <div class="email-box">

                <label for="email">Eamil :</label>
                <input type="email" name="userId" id="">

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

    <!-- FOOTER -->

    <div class="footer">

        <p>&copy; 2021 all rights to @MIN-BMS 🎭</p>

    </div>

</body>

</html>