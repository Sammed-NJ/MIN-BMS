<?php
$CONpath = $_SERVER['DOCUMENT_ROOT'];
$CONpath .= "/collage projects/min-mbs/db_connect.php";
require($CONpath);

$Hpath = $_SERVER['DOCUMENT_ROOT'];
$Hpath .= "/collage projects/min-mbs/includes/admin_includes/admin_header.php";
include_once($Hpath);

?>

<!-- RUNNING-MOVIES-CONTENT -->
<div class="table-content admin-table">

    <h1>MIN-BMS | MOVIES RUNING</h1>

    <table>

        <thead>
            <tr>
                <th>Number</th>
                <th>Movie Name</th>
                <th>About Movie</th>
                <th>Cost / Head</th>
                <th>Time of Movie Added</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>

            <?php
            $sql = "SELECT * FROM `movies`";
            $result = mysqli_query($conn, $sql);
            $sno = 0;
            while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?php echo $sno = $sno + 1; ?></td>

                    <td><?php echo $row['mov_title']; ?></td>

                    <td><?php echo $row['mov_desc']; ?></td>

                    <td><?php echo $row['CPD']; ?></td>

                    <td><?php echo $row['create_date']; ?></td>

                    <td class="sider">

                        <a href="update_movie.php?id=<?php echo $row['mov_id']; ?>" class="order-a">Edit</a>

                        <form action="delete_movie.php" method="post">

                            <input type="hidden" name="id" value="<?php echo $row['mov_id']; ?>">
                            <button type="submit" class="cancel">Delete</button>

                        </form>

                    </td>

                </tr>
            <?php endwhile; ?>


        </tbody>

    </table>

    <a href="create_movies.php" type="submit" class="admin-btn">Add New Movie</a>

</div>

<?php
$Hpath = $_SERVER['DOCUMENT_ROOT'];
$Hpath .= "/collage projects/min-mbs/includes/admin_includes/admin_footer.php";
include_once($Hpath);
?>