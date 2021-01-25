<?php

$CONpath = $_SERVER['DOCUMENT_ROOT'];
$CONpath .= "/collage projects/min-mbs/db_connect.php";
require($CONpath);

$id = $_POST['userId'] ?? null;

if (!$id) {
    header('Location: admin_users.php');
    exit;
}

$statment = $pdo->prepare('DELETE FROM users WHERE userId = :id');
$statment->bindValue(':id', $id);
$statment->execute();

header('Location: admin_users.php');
