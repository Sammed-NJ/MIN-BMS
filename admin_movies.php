<?php
require "db_connect.php";

$statement = $pdo->prepare('SELECT * FROM movies ORDER BY create_date DESC');

$statement->execute();
$movies = $statement->fetchAll(PDO::FETCH_ASSOC);

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

    <!-- RUNNING-MOVIES-CONTENT -->
    <div class="table-content admin-table">

        <h1>MIN-BMS | MOVIES RUNING</h1>

        <table>

            <thead>
                <tr>
                    <th>Number</th>
                    <th>Movie Name</th>
                    <th>About Movie</th>
                    <th>Cost / Head</th>
                    <th>Time of Added</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($movies as $i => $movies) : ?>

                    <tr>
                        <td><?php echo $i + 1 ?></td>

                        <td><?php echo $movies['movie_title'] ?></td>

                        <td><?php echo $movies['movie_desc'] ?></td>

                        <td><?php echo $movies['cost_per_head'] ?></td>

                        <td><?php echo $movies['create_date'] ?></td>

                        <td class="sider">

                            <a href="update_movie.php?id=<?php echo $movies['id']; ?>" class="order-a">Edit</a>

                            <form action="delete_movie.php" method="post">

                                <input type="hidden" name="id" value="<?php echo $movies['id']; ?>">
                                <button type="submit" class="cancel">Delete</button>

                            </form>

                        </td>

                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

        <a href="create_movies.php" type="submit" class="admin-btn">Add New Movie</a>

    </div>

    <!-- FOOTER -->
    <div class="footer">

        <p>&copy; 2021 all rights to @MIN-BMS 🎭</p>

    </div>

</body>

</html>