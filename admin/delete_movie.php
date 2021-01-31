<?php
$CONpath = $_SERVER['DOCUMENT_ROOT'];
$CONpath .= "/collage projects/min-mbs/db_connect.php";
require($CONpath);

$id = $_POST['id'] ?? null;


if (!$id) {
    header('Location: admin_movies.php');
    exit;
}

$delSql = "DELETE FROM `movies` WHERE mov_id = '$id'";
mysqli_query($conn, $delSql);
header('Location: admin_movies.php');
