<?php

//include db connection
include 'config.php';
error_reporting(0);

if(isset($_POST['add'])){
    $foodid = $_POST['foodid'];
    $fooditem = $_POST['fooditem'];
    $price = $_POST['price'];
    

   // insert data

   mysqli_query($conn,"INSERT INTO `manage_food`(`foodid`, `fooditem`, `price`) VALUES ('$foodid','$fooditem','$price')");

   header('location:food_management.php');
}