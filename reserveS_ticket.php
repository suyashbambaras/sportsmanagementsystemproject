<?php
    include("config.php");
    error_reporting(0);
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Reserve Ticket</title>
    <link rel="stylesheet" href="reserve.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
     .other_link{
    text-align: center;
    font-size: 30px;
    
}
.button{
    text-align: center;
    font-size: 30px;
    
}
   </style>
<body>
    
    <div class="container">
        <div class="title">Reserve Ticket</div>
        <form action="#" method="GET" autocomplete="off">
            <div class="booking-details">
                <div class="input-box">
                    <span class="details">Name</span>
                    <input type="text" placeholder="Enter your name" name="user" id="user" required>
                </div><br>
                
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" placeholder="Enter your email" name="email" id="email" required>
                </div><br>

                <div class="input-box">
                    <span class="details">Phone</span>
                    <input type="text" placeholder="Enter your number" name="phone" id="" required>
                </div><br>

                <div class="input-box">
                    <span class="details">Match Name</span>
                    <select input type="emal" placeholder="" name="matchname" id="matchname" required>
                    <option>Chennai Super Kings VS Delhi Capitals</option>
                        <option>Kolkata Knight Riders VS Mumbai Indians</option>
                        <option>Punjab Kings VS Rajasthan Royals</option>
                        <option>Royal Challengers Bangalore VS Sunrisers Hyderabad</option>
                        <option>Mumbai Indians VS Delhi Capitals</option>
                        <option>Sunrisers Hyderabad VS Chennai Super Kings</option>
                        <option>Royal Challengers Bangalore VS Punjab Kings</option>
                        <option>Rajasthan Royals VS Delhi Capitals</option>

                    </select>
                </div><br>

                <div class="input-box">
                    <span class="details">Part</span>
                    <select input type="text" placeholder="" name="part" id="part" required>
                        <option> Garware Stand</option>
                        <option> Vijay Merchant Stand</option>
                    </select>
                </div><br>
                
                <div class="input-box">
                    <span class="details">Booking Date</span>
                    <input type="date" placeholder="date" name="date" id="date" required>
                </div><br>

                <div class="input-box">
                    <span class="details">Food</span>
                    <select input type="text" placeholder="food" name="food" id="food" required>
                        <option>Cheese Pizza - 400 Rs</option>
                        <option>Veg Burger - 120 Rs</option>
                        <option>Chicken Burger - 160 Rs</option>
                        <option>Grill Sandwich - 150 Rs</option>
                        <option>Garlic Bread - 120 Rs</option>
                        <option>Hot Coffee - 60 Rs</option>
                        <option>Cold coffee - 90 Rs</option>
                        <option> No </option>
                    <select>
                </div><br>
                <div class="input-box">
                    <span class="details">Parking</span>
                    <select input type="text" placeholder="" name="parking" id="parking" required>
                        <option>No</option>
                        
                    </select>
                </div><br>

                <div class="button">
                    <input type="submit" value="Reserve" name="reserve" required>
                </div>
                <div class="button">
                    <a href ="http://localhost/newproject/ticket_booking.php">Cancel</a>
                </div>   
            </div>
        </form>
        <div class="other_link">
                <a href="http://localhost/newproject/payment.php">Next</a>
                </div>
    </div>
</body>
</html>


<?php

if($_GET['reserve']){

$user=$_GET['user'];
$email=$_GET['email'];
$phone=$_GET['phone'];
$matchname=$_GET['matchname'];
$part=$_GET['part'];
$date=$_GET['date'];
$food=$_GET['food'];
$parking=$_GET['parking'];

$query="INSERT INTO RESERVE VALUES ('$user', '$email', '$phone', '$matchname', '$part', '$date','$food', '$parking')";
$data=mysqli_query($conn, $query);

if($data)
{
    echo "<script>alert('Ticket Reserve Successfully..!')</script>";
}
else
{
   echo " Failed to reserved ticket";
}
}

?>

