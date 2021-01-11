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

    <!-- LOGIN-CONTENT -->

    <div class="content-log">

        <h1>MIN-BMS | LOGIN</h1>

        <form action="" method="get">

            <div class="error hide">
                <p>Invalid Email ID/Password</p>
            </div>

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
                <p><span class="sign-btn">sign in</span> if you dont have account</p>

            </div>

        </form>

    </div>

    <!-- SIGNIN-CONTENT -->

    <div class="content-sign hide">

        <h1>MIN-BMS | SINGIN</h1>

        <form action="" method="POST">

            <div class="name-box">

                <label for="name">Name :</label>
                <input type="text" name="" id="">

            </div>

            <div class="email-box">

                <label for="email">Eamil :</label>
                <input type="email" name="" id="">

            </div>

            <div class="password-box">

                <label for="password">Password :</label>
                <input type="password" name="" id="">

            </div>

            <div class="submit-box">

                <button type="submit" class="submit">Sign in</button>
                <p><span class="log-btn">login</span> if you alrrady have account</p>

            </div>

        </form>

    </div>

    <!-- FOOTER -->

    <div class="footer">

        <p>&copy; 2021 all rights to @MIN-BMS 🎭</p>

    </div>

    <!-- JAVASCRIPT -->
    <script src="js/dom.js"></script>

</body>

</html>