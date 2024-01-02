<?php

include 'config.php';
error_reporting(0);

 $matchid = $_GET['mi'];
mysqli_query($conn,"DELETE FROM `manage_match` WHERE MATCHID = '$matchid'");

header('location:match_management.php');
?>