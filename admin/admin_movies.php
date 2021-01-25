<?php
$CONpath = $_SERVER['DOCUMENT_ROOT'];
$CONpath .= "/collage projects/min-mbs/db_connect.php";
require($CONpath);

$statement = $pdo->prepare('SELECT * FROM movies ORDER BY create_date DESC');

$statement->execute();
$movies = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<?php
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
                <th>Time of Added</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>

            <?php foreach ($movies as $i => $movies) : ?>

                <tr>
                    <td><?php echo $i + 1 ?></td>

                    <td><?php echo $movies['movie_title'] ?></td>

                    <td><?php echo $movies['movie_desc'] ?></td>

                    <td><?php echo $movies['cost_per_head'] ?></td>

                    <td><?php echo $movies['create_date'] ?></td>

                    <td class="sider">

                        <a href="update_movie.php?id=<?php echo $movies['id']; ?>" class="order-a">Edit</a>

                        <form action="delete_movie.php" method="post">

                            <input type="hidden" name="id" value="<?php echo $movies['id']; ?>">
                            <button type="submit" class="cancel">Delete</button>

                        </form>

                    </td>

                </tr>

            <?php endforeach; ?>

        </tbody>

    </table>

    <a href="create_movies.php" type="submit" class="admin-btn">Add New Movie</a>

</div>

<?php
$Hpath = $_SERVER['DOCUMENT_ROOT'];
$Hpath .= "/collage projects/min-mbs/includes/admin_includes/admin_footer.php";
include_once($Hpath);
?>