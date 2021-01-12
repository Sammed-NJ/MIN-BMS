<?php

require "db_connect.php";

$id = $_POST['id'] ?? null;

if (!$id) {
    header('Location: admin_movies.php');
    exit;
}

$statment = $pdo->prepare('DELETE FROM movies WHERE id = :id');
$statment->bindValue(':id', $id);
$statment->execute();

header('Location: admin_movies.php');
