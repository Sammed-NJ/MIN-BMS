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
                    <th>Rating</th>
                    <th>Directer & (cast)</th>
                    <th>Book</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>

                    <td>Attack On Titan</td>

                    <td> <span>4.5</span> ⭐</td>

                    <td>Directer Name (cast1, cast2, cast3)</td>

                    <td>
                        <button class="cancel">Edit</button>
                        <button class="order">Remove</button>
                    </td>
                </tr>
            </tbody>

        </table>

        <button type="submit" class="submit admin-add-btn margin">Add New</button>

    </div>

    <!-- ADD-NEW-RUNNING-MOVIES-CONTENT -->
    <div class="add-container hide">

        <div class="movie-adder">

            <h1>Add NEW MOVIE</h1>

            <form action="" method="">

                <div class="movie-box">

                    <label for="movie name">Movie Name :</label>
                    <input type="text" name="" id="">

                </div>

                <div class="rating-box">

                    <label for="rating">Add Rating :</label>
                    <input type="text" name="" id="">

                </div>

                <div class="info-box">

                    <label for="info">Add directer & (cast) :</label>
                    <textarea name="" id=""></textarea>

                </div>

                <div class="btn-box">

                    <button class="back back-btn">Go Back</button>
                    <button type="submit" class="submit">Add New</button>

                </div>

            </form>



        </div>

    </div>

    <!-- FOOTER -->
    <div class="footer">

        <p>&copy; 2021 all rights to @MIN-BMS 🎭</p>

    </div>

    <!-- JAVASCRIPT -->
    <script src="js/admin_dom.js"></script>

</body>

</html>