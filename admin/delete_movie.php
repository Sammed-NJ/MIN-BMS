<?php

$CONpath = $_SERVER['DOCUMENT_ROOT'];
$CONpath .= "/collage projects/min-mbs/db_connect.php";
require($CONpath);

$id = $_POST['id'] ?? null;

if (!$id) {
    header('Location: admin_movies.php');
    exit;
}

$statment = $pdo->prepare('DELETE FROM users WHERE id = :id');
$statment->bindValue(':id', $id);
$statment->execute();

header('Location: admin_movies.php');
