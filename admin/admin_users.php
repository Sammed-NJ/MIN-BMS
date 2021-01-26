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

    <h1>MIN-BMS | USERS</h1>

    <table>

        <thead>
            <tr>
                <th>S.No</th>
                <th>User Email ID</th>
                <th>Register Time</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <td></td>

                <td></td>

                <td></td>

                <td>
                    <button class="cancel" type="submit" name="remove_user">Remove</button>

                </td>

            </tr>

        </tbody>

    </table>


</div>

<?php
$Hpath = $_SERVER['DOCUMENT_ROOT'];
$Hpath .= "/collage projects/min-mbs/includes/admin_includes/admin_footer.php";
include_once($Hpath);
?>