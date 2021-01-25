<?php

$CONpath = $_SERVER['DOCUMENT_ROOT'];
$CONpath .= "/collage projects/min-mbs/db_connect.php";
require($CONpath);

$id = $_GET['id'] ?? null;

if (!$id) {
    header('Location: admin_movies.php');
    exit;
}

$statement = $pdo->prepare('SELECT * FROM movies WHERE id = :id');
$statement->bindValue(':id', $id);
$statement->execute();
$movie = $statement->fetch(PDO::FETCH_ASSOC);

$errors = [];
$mName = $movie['movie_title'];
$cost = $movie['cost_per_head'];
$description = $movie['movie_desc'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $mName = $_POST['mName'];
    $cost = $_POST['cost'];
    $description = $_POST['description'];

    if (!$mName) {
        $errors[] = 'Movie Name is Required';
    }

    if (!$cost) {
        $errors[] = 'Price Required';
    }

    if (empty($errors)) {

        $statement = $pdo->prepare("UPDATE movies SET movie_title = :mName, movie_desc = :description, cost_per_head = :cost
        WHERE id = :id");

        $statement->bindValue(':mName', $mName);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':cost', $cost);
        $statement->bindValue(':id', $id);
        $statement->execute();
        header('Location: admin_movies.php');
    }
}

?>

<?php
$Hpath = $_SERVER['DOCUMENT_ROOT'];
$Hpath .= "/collage projects/min-mbs/includes/admin_includes/admin_header.php";
include_once($Hpath);
?>

<!-- ADD-NEW-RUNNING-MOVIES-CONTENT -->
<div class="add-container">

    <div class="movie-adder">

        <h1>Add NEW MOVIE</h1>

        <?php if (!empty($errors)) : ?>
            <div class="error">
                <?php foreach ($errors as $errors) : ?>
                    <p><?php echo $errors ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif ?>

        <form action="" method="post">

            <div class="movie-box">

                <label for="movie name">Movie Name :</label>
                <input type="text" name="mName" id="" value="<?php echo $mName ?>">

            </div>

            <div class="rating-box">

                <label for="rating">Price / Head :</label>
                <input type="number" step=".01" name="cost" value="<?php echo $cost ?>">

            </div>

            <div class="info-box">

                <label for="info">Add Description :</label>
                <textarea name="description" id=""><?php echo $description ?></textarea>

            </div>

            <div class="btn-box">

                <a href="admin_movies.php" class="admin-back">Go Back</a>
                <button type="submit" class="submit">Update</button>

            </div>

        </form>



    </div>

</div>

<!-- FOOTER -->
<div class="footer">

    <p>&copy; 2021 all rights to @MIN-BMS 🎭</p>

</div>

</body>

</html>