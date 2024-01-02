<?php

include 'config.php';
error_reporting(0);

if(isset($_POST['update'])){
    $matchid = $_POST['matchid'];
    $matchname = $_POST['matchname'];
    $date = $_POST['date'];
    $day = $_POST['day'];
    $time = $_POST['time'];

    mysqli_query($conn,"UPDATE manage_match SET matchid = '$matchid', matchname ='$matchname', date='$date',day='$day',time ='$time' WHERE MATCHID = '$matchid'");
    header('location:match_management.php');
}
?>