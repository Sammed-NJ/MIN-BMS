<?php

require "db_connect.php";

$id = $_POST['userId'] ?? null;

if (!$id) {
    header('Location: admin_users.php');
    exit;
}

$statment = $pdo->prepare('DELETE FROM users WHERE userId = :id');
$statment->bindValue(':id', $id);
$statment->execute();

header('Location: admin_users.php');
