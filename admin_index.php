<?php
require "db_connect.php";

$statement = $pdo->prepare('SELECT * FROM movies');
$statement2 = $pdo->prepare('SELECT * FROM users');

$statement->execute();
$movies = $statement->fetchAll(PDO::FETCH_ASSOC);
$statement2->execute();
$users = $statement2->fetchAll(PDO::FETCH_ASSOC);

$totalMovies = sizeof($movies);

$totalUsers = sizeof($users);

?>


<?php include_once 'includes/admin_header.php'; ?>

<!-- MOVIES-CONTENT -->

<div class="content">

    <h1>
        MIN-BMS | ADMIN
    </h1>

    <div class="box">

        <div class="boxs">

            <h2><?php echo $totalUsers; ?></h2>
            <h2>ACTIVE USERS</h2>

        </div>

        <div class="boxs">

            <h2><?php echo $totalMovies; ?></h2>
            <h2>MOVIES RUNNING</h2>

        </div>

        <div class="boxs">

            <h2>4</h2>
            <h2>TOTAL BOOKINGS</h2>

        </div>

    </div>

</div>

<?php include_once 'includes/admin_footer.php'; ?>