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

    <!-- MOVIES-CONTENT -->

    <div class="table-content">

        <h1>MIN-BMS | MOVIES</h1>

        <table>

            <thead>
                <tr>
                    <th>Number</th>
                    <th>Movie Name</th>
                    <th>Rating</th>
                    <th>Directer & (cast)</th>
                    <th>THeater</th>
                    <th>NO.of Seats</th>
                    <th>Date & Time</th>
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
                        <select class="theater" name="seats" id="">
                            <option disabled>select theater</option>
                            <option value="">Max Cenima</option>
                            <option value="">Icons Films</option>
                            <option value="">Globe Cenima</option>
                        </select>
                    </td>
                    <td>
                        <select name="seats" id="">
                            <option disabled>select seats</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                            <option value="">6</option>
                            <option value="">7</option>
                            <option value="">8</option>
                            <option value="">9</option>
                            <option value="">10</option>
                        </select>
                    </td>
                    <td>
                        <input type="datetime-local" name="" id="">
                    </td>
                    <td>
                        <button class="order">Book Now</button>
                    </td>
                </tr>
            </tbody>

        </table>

    </div>


    <!-- FOOTER -->

    <div class="footer">

        <p>&copy; 2021 all rights to @MIN-BMS 🎭</p>

    </div>

</body>

</html>