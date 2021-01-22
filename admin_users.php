<?php
require "db_connect.php";

$statement = $pdo->prepare('SELECT * FROM users ORDER BY time_stamp');

$statement->execute();
$users = $statement->fetchAll(PDO::FETCH_ASSOC);

?>


<?php include_once 'includes/admin_header.php'; ?>

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

<?php include_once 'includes/admin_footer.php'; ?>