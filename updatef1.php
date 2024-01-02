<?php

include 'config.php';
error_reporting(0);

if(isset($_POST['update'])){

    $foodid = $_POST['foodid'];
	$fooditem = $_POST['fooditem'];
	$price = $_POST['price'];

    mysqli_query($conn,"UPDATE manage_food SET foodid ='$foodid', fooditem='$fooditem', price='$price' WHERE FOODID = '$foodid'");
    header('location:food_management.php');
}
?>