<?php

require "db_connect.php";

$id = $_GET['id'] ?? null;

if (!$id) {
    header('Location: admin_movies.php');
    exit;
}

$statement = $pdo->prepare('SELECT * FROM movies WHERE id = :id');
$statement->bindValue(':id', $id);
$statement->execute();
$movie = $statement->fetch(PDO::FETCH_ASSOC);

$errors = [];
$mName = $movie['movie_title'];
$cost = $movie['cost_per_head'];
$description = $movie['movie_desc'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $mName = $_POST['mName'];
    $cost = $_POST['cost'];
    $description = $_POST['description'];

    if (!$mName) {
        $errors[] = 'Movie Name is Required';
    }

    if (!$cost) {
        $errors[] = 'Price Required';
    }

    if (empty($errors)) {

        $statement = $pdo->prepare("UPDATE movies SET movie_title = :mName, movie_desc = :description, cost_per_head = :cost
        WHERE id = :id");

        $statement->bindValue(':mName', $mName);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':cost', $cost);
        $statement->bindValue(':id', $id);
        $statement->execute();
        header('Location: admin_movies.php');
    }
}

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

            <div class="nav-logo"> <a href="admin_index.php">MIN-BMS 🎭 | ADMIN DASHBORDE</a> </div>

            <div class="nav-list">
                <a href="admin_index.php" class="nav-links">Home</a>
                <a href="admin_movies.php" class="nav-links">Movies</a>
                <a href="admin_booking.php" class="nav-links">Bookings</a>
                <a href="admin_setting.php" class="nav-links">Admin</a>

            </div>

        </div>

    </div>

    <!-- ADD-NEW-RUNNING-MOVIES-CONTENT -->
    <div class="add-container">

        <div class="movie-adder">

            <h1>Add NEW MOVIE</h1>

            <?php if (!empty($errors)) : ?>
                <div class="error">
                    <?php foreach ($errors as $errors) : ?>
                        <p><?php echo $errors ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif ?>

            <form action="" method="post">

                <div class="movie-box">

                    <label for="movie name">Movie Name :</label>
                    <input type="text" name="mName" id="" value="<?php echo $mName ?>">

                </div>

                <div class="rating-box">

                    <label for="rating">Price / Head :</label>
                    <input type="number" step=".01" name="cost" value="<?php echo $cost ?>">

                </div>

                <div class="info-box">

                    <label for="info">Add Description :</label>
                    <textarea name="description" id=""><?php echo $description ?></textarea>

                </div>

                <div class="btn-box">

                    <a href="admin_movies.php" class="admin-back">Go Back</a>
                    <button type="submit" class="submit">Update</button>

                </div>

            </form>



        </div>

    </div>

    <!-- FOOTER -->
    <div class="footer">

        <p>&copy; 2021 all rights to @MIN-BMS 🎭</p>

    </div>

</body>

</html>