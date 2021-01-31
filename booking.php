<?php

require 'db_connect.php';

// check loggedin or not
session_start();

if (isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == true) {


    // if loggedin then get movie detail by id and get user name

    $place = $_POST['Mplace'];
    $seats = $_POST['Mseats'];
    $date = $_POST['Mdate'];
    $time = $_POST['Mtime'];
    $id = $_POST['id'];

    $sql = "SELECT * FROM `movies` WHERE mov_id = '$id'";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $mov_title = $row['mov_title'];
        $mov_cpd = $row['CPD'];
    }

    $uname = $_SESSION['Uname'];

    if (!empty($seats) && !empty($date) && !empty($place) && !empty($time) && !empty($id)) {

        $totalAmount = $mov_cpd * $seats;

        // insert the values got in the data base 
        $upsql = "INSERT INTO `booking` (`U_name`, `mov_title`, `tital_amount`, `M_place`, `M_date`, `M_time`, `N_seats`, `B_time`)
                    VALUES ('$uname', '$mov_title', '$totalAmount', '$place', '$date', '$time', '$seats', current_timestamp())";
        $result = mysqli_query($conn, $upsql);

        header('Location: my_movies.php');
    } else {
        echo 'ERROR';
        header('Location: movies.php');
        echo '<br>';
    }
} else {
    //if not rediect to login.php
    header('Location: register_validation/login.php');
    $username = '';
    $password = '';
    exit;
}
