<?php
// $pdo = new PDO('mysql:host=localhost;port=3306;dbname=min_bms', 'root', '');
// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'min_bms';

$conn = mysqli_connect($server, $username, $password, $dbname);
