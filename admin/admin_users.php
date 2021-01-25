<?php
$CONpath = $_SERVER['DOCUMENT_ROOT'];
$CONpath .= "/collage projects/min-mbs/db_connect.php";
require($CONpath);

$statement = $pdo->prepare('SELECT * FROM users ORDER BY time_stamp');

$statement->execute();
$users = $statement->fetchAll(PDO::FETCH_ASSOC);

?>


<?php
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
            <?php foreach ($users as $i => $users) : ?>

                <tr>
                    <td><?php echo $i + 1 ?></td>

                    <td><?php echo $users['email_Id'] ?></td>

                    <td><?php echo $users['time_stamp'] ?></td>

                    <td>

                        <form action="delete_user.php" method="post">

                            <input type="hidden" name="userId" value="<?php echo $users['userId']; ?>">
                            <button class="cancel" type="submit" name="remove_user">Remove</button>

                        </form>

                    </td>

                </tr>

            <?php endforeach; ?>
        </tbody>

    </table>


</div>

<?php
$Hpath = $_SERVER['DOCUMENT_ROOT'];
$Hpath .= "/collage projects/min-mbs/includes/admin_includes/admin_footer.php";
include_once($Hpath);
?>