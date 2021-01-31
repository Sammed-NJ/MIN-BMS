<?php

$CONpath = $_SERVER['DOCUMENT_ROOT'];
$CONpath .= "/collage projects/min-mbs/db_connect.php";
require($CONpath);

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header('Location: register_validation/login.php');
    $username = '';
    $password = '';
    exit;
}

$uname = $_SESSION['Uname'];

include_once 'includes/index_includes/main_hearder.php'

?>

<!-- MOVIES-CONTENT -->

<div class="table-content">

    <h1>MIN-BMS | MY MOVIES</h1>

    <table>

        <thead>
            <tr>
                <th>Number</th>
                <th>Movie Name</th>
                <th>User Name</th>
                <th>Theater</th>
                <th>NO.of Seats</th>
                <th>Date & Time</th>
                <th>Total Amount</th>
                <th>Book</th>
            </tr>
        </thead>

        <tbody>

            <?php
            $sql = "SELECT * FROM `booking` WHERE U_name = '$uname'";
            $result = mysqli_query($conn, $sql);
            $sno = 0;
            while ($row = mysqli_fetch_assoc($result)) : ?>

                <tr>
                    <td><?php echo $sno = $sno + 1; ?></td>

                    <td><?php echo $row['mov_title']; ?></td>

                    <td><?php echo $row['U_name']; ?></td>

                    <td><?php echo $row['M_place']; ?></td>

                    <td><?php echo $row['N_seats']; ?></td>

                    <td><?php echo $dt = '' . $row['M_date'] . '-' . $row['M_time'];  ?></td>

                    <td><?php echo $row['tital_amount']; ?></td>

                    <td>
                        <button class="submit">Download</button>
                    </td>

                </tr>

            <?php endwhile; ?>

        </tbody>

    </table>

</div>

<?php include_once 'includes/index_includes/mian_footer.php' ?>