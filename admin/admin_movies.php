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
                <th>Time of Added</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>


            <tr>
                <td></td>

                <td></td>

                <td></td>

                <td></td>

                <td></td>

                <td class="sider">

                    <a href="update_movie.php?id=<?php echo $movies['id']; ?>" class="order-a">Edit</a>

                    <button type="submit" class="cancel">Delete</button>

                </td>

            </tr>


        </tbody>

    </table>

    <a href="create_movies.php" type="submit" class="admin-btn">Add New Movie</a>

</div>

<?php
$Hpath = $_SERVER['DOCUMENT_ROOT'];
$Hpath .= "/collage projects/min-mbs/includes/admin_includes/admin_footer.php";
include_once($Hpath);
?>