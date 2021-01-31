<?php
$CONpath = $_SERVER['DOCUMENT_ROOT'];
$CONpath .= "/collage projects/min-mbs/db_connect.php";
require($CONpath);

$Hpath = $_SERVER['DOCUMENT_ROOT'];
$Hpath .= "/collage projects/min-mbs/includes/admin_includes/admin_header.php";
include_once($Hpath);
?>

<!-- BOOKED-MOVIES-CONTENT -->
<div class="table-content admin-table">

    <h1>MIN-BMS | MOVIES RUNING</h1>

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
            </tr>
        </thead>

        <tbody>

            <?php
            $sql = "SELECT * FROM `booking`";
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

                </tr>

            <?php endwhile; ?>

        </tbody>

    </table>


</div>

<?php
$Hpath = $_SERVER['DOCUMENT_ROOT'];
$Hpath .= "/collage projects/min-mbs/includes/admin_includes/admin_footer.php";
include_once($Hpath);
?>