<?php

$cssPath = $_SERVER['DOCUMENT_ROOT'];
$cssPath = "/collage projects/min-mbs/css/global_styles.css";

$resrcPath = $_SERVER['DOCUMENT_ROOT'];
$resrcPath = "/collage projects/min-mbs/resrc/bg_video.mp4";

// NAV BAR PATHS

$PathIN = $_SERVER['DOCUMENT_ROOT'];
$PathIN = "/collage projects/min-mbs/index.php";

$PathAB = $_SERVER['DOCUMENT_ROOT'];
$PathAB = "/collage projects/min-mbs/about.php";

$PathMO = $_SERVER['DOCUMENT_ROOT'];
$PathMO = "/collage projects/min-mbs/movies.php";

$PathMY = $_SERVER['DOCUMENT_ROOT'];
$PathMY = "/collage projects/min-mbs/my_movies.php";

$PathLO = $_SERVER['DOCUMENT_ROOT'];
$PathLO = "/collage projects/min-mbs/register_validation/login.php";

$PathLOu = $_SERVER['DOCUMENT_ROOT'];
$PathLOu = "/collage projects/min-mbs/register_validation/logout.php";

$logoutbtn = '<a href="' . $PathLOu . '" class="nav-links">Logout</a>';
$loginbtn = '<a href="' . $PathLO . '" class="nav-links">Login/Signin</a>';

?>

<!-- HTML -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIN-BMS 🎭</title>

    <!-- CSS-STYLES -->
    <link rel="stylesheet" href="<?php echo $cssPath; ?>">

    <!-- GOOGLE-FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- ALL TEXT FACE Poppins -- SPECIAL TEXT FACE Yellowtail -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Yellowtail&display=swap" rel="stylesheet">

</head>

<body>

    <!-- BG-VIDEO -->
    <section class="showcase">

        <video src="<?php echo $resrcPath; ?>" muted loop autoplay></video>

    </section>

    <!-- NAVBAR -->
    <div class="navbar">

        <div class="container">

            <div class="nav-logo"> <a href="<?php echo $PathIN; ?>">MIN-BMS 🎭</a> </div>

            <div class="nav-list">

                <a href="<?php echo $PathIN; ?>" class="nav-links">Home</a>

                <a href="<?php echo $PathAB; ?>" class="nav-links">About</a>

                <a href="<?php echo $PathMO; ?>" class="nav-links">Movies</a>

                <a href="<?php echo $PathMY; ?>" class="nav-links">My Movies</a>

                <?php

                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

                    echo $logoutbtn;
                } else {
                    echo $loginbtn;
                }
                ?>

            </div>

        </div>

    </div>




    <?php

    // if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

    // } else {

    // }


    ?>