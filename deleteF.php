<?php

include 'config.php';
error_reporting(0);

 $foodid = $_GET['fi'];
mysqli_query($conn,"DELETE FROM `manage_food` WHERE FOODID = '$foodid'");

header('location:food_management.php');
?>