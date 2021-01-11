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

    <!-- BOOKED-MOVIES-CONTENT -->
    <div class="table-content admin-table">

        <h1>MIN-BMS | MOVIES RUNING</h1>

        <table>

            <thead>
                <tr>
                    <th>Number</th>
                    <th>Movie Name</th>
                    <th>Theater</th>
                    <th>No of Seats</th>
                    <th>Date & Time</th>
                    <th>Print</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>

                    <td>Attack On Titan</td>

                    <td>Max Cienima</td>

                    <td>4</td>

                    <td>20/08/2021 - 9:30pm</td>

                    <td> <button class="submit" type="submit">Print</button> </td>

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