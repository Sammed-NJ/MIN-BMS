<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIN-BMS 🎭</title>

    <!-- CSS-STYLES -->
    <?php $cssPath = $_SERVER['DOCUMENT_ROOT'];
    $cssPath = "/collage projects/min-mbs/css/global_styles.css"; ?>
    <link rel="stylesheet" href="<?php echo $cssPath; ?>">

    <!-- GOOGLE-FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- ALL TEXT FACE 'Poppins' -- SPECIAL TEXT FACE 'Yellowtail' -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Yellowtail&display=swap" rel="stylesheet">

</head>

<body>

    <!-- BG-VIDEO -->
    <section class="showcase">

        <?php $resrcPath = $_SERVER['DOCUMENT_ROOT'];
        $resrcPath = "/collage projects/min-mbs/resrc/bg_video.mp4"; ?>

        <video src="<?php echo $resrcPath; ?>" muted loop autoplay></video>

    </section>

    <!-- NAVBAR -->
    <div class="navbar">

        <div class="container">

            <div class="nav-logo"> <a href="admin_index.php">MIN-BMS 🎭 | ADMIN DASHBORDE</a> </div>

            <div class="nav-list">
                <a href="admin_index.php" class="nav-links">Home</a>
                <a href="admin_movies.php" class="nav-links">Movies</a>
                <a href="admin_users.php" class="nav-links">Users</a>
                <a href="admin_booking.php" class="nav-links">Bookings</a>
                <a href="admin_setting.php" class="nav-links">Admin</a>

            </div>

        </div>

    </div>