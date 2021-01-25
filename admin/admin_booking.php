<?php
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
                <th>S.No</th>
                <th>Movie Name</th>
                <th>User ID</th>
                <th>Theater</th>
                <th>No of Seats</th>
                <th>Date & Time</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>

                <td>Attack On Titan</td>

                <td>sammednj13@gmail.com</td>

                <td>Max Cienima</td>

                <td>4</td>

                <td>20/08/2021 - 9:30pm</td>

            </tr>
        </tbody>

    </table>


</div>

<?php
$Hpath = $_SERVER['DOCUMENT_ROOT'];
$Hpath .= "/collage projects/min-mbs/includes/admin_includes/admin_footer.php";
include_once($Hpath);
?>