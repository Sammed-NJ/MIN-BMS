<?php
$CONpath = $_SERVER['DOCUMENT_ROOT'];
$CONpath .= "/collage projects/min-mbs/db_connect.php";
require($CONpath);

$id = $_POST['id'] ?? null;

echo $id;


if (!$id) {
    header('Location: admin_users.php');
    exit;
}

$delSql = "DELETE FROM `users` WHERE user_id = '$id'";
mysqli_query($conn, $delSql);
header('Location: admin_users.php');
