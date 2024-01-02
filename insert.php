<?php

//include db connection
include 'config.php';
error_reporting(0);

if(isset($_POST['add'])){
    $matchid = $_POST['matchid'];
    $matchname = $_POST['matchname'];
    $date = $_POST['date'];
    $day = $_POST['day'];
    $time = $_POST['time'];

   // insert data

   mysqli_query($conn,"INSERT INTO `manage_match`(`matchid`, `matchname`, `date`, `day`, `time`) VALUES ('$matchid','$matchname','$date','$day','$time')");

   header('location:match_management.php');
}