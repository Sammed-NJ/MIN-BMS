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
            <?php
            $sql = "SELECT * FROM `users`";
            $result = mysqli_query($conn, $sql);
            $sno = 0;
            while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?php echo $sno = $sno + 1 ?></td>

                    <td><?php echo $row['uName'] ?></td>

                    <td><?php echo $row['time_stamp'] ?></td>

                    <td>

                        <form action="delete_user.php" method="post">

                            <input type="hidden" name="id" value="<?php echo $row['user_id']; ?>">
                            <button class="cancel" type="submit" name="remove_user">Remove</button>

                        </form>

                    </td>

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