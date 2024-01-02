<?php
    include("config.php");
    error_reporting(0);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="payment.css">
    </head>
<body>
    <div class="wrapper">
        <h2>Payment Form</h2>
        <form action="" method="GET" autocomplete="off">
            <h4>Account</h4>
            <div class="input-group">
                <div class="input-box">
                    <input type="text"  name="firstname" placeholder=" First Name" required class="name">

                </div>
                <div class="input-box">
                    <input type="text" name="lastname" placeholder="Last Name" required class="name">
                 </div>
                </div>
                 
            <div class="input-box">
                    <input type="email" name="email" placeholder="Email Address" required class="name">
                 </div><br>
            <div class="input-box">
                    <h4>Date of Birth</h4>
                    <input type="date"  name="dob" placeholder="DD-MM-YYYY" class="dob">
                    
                </div><br>
                <div class="input-box">
                    <h4>Gender</h4>
                    <input type="radio" id="b1" value="b1" name="gender" checked class="radio">
                    <label for="b1">Male</label>
                    <input type="radio" id="b2" value="b2" name="gender" checked class="radio">
                    <label for="b2">Female</label>
                </div><br>

                <div class="input-box">
                    <h4>Payment Details</h4>
                    <input type="radio" id="bc1" name="pay" checked class="radio">
                    <label for="bc1"><span>Credit Card</span></label>
                    <input type="radio" id="bc2" name="pay" checked class="radio">
                    <label for="bc2"><span>Paypal</span></label>
                </div><br>
            
                <div class="input-box">
                    <input type="tel" placeholder="Card Number" required class="name">
                </div><br>
                <div class="input-box">
                    <input type="tel" placeholder="Card CVC" required class="name">
                </div><br>
        
               <div class="input-box">
                    <select>
                        <option>25 Feb</option>
                        <option>26 Feb</option>
                        <option>27 Feb</option>
                    </select>
                    <select>
                        <option>2020</option>
                        <option>2021</option>
                        <option>2022</option>
                    </select>
                 </div><br><br>
        
            <div class="input-group">
                <div class="input-box">
                    <button type="submit" name="submit">Pay Now</button> 
        </form>

    </div>
</body>
</html>


<?php

if($_GET['submit']){

$firstname=$_GET['firstname'];
$lastname=$_GET['lastname'];
$email=$_GET['email'];
$dob=$_GET['date'];
$gender=$_GET['gender'];
$pay=$_GET['pay'];


$query="INSERT INTO PAYMENT VALUES ('$firstname', '$lastname', '$email', '$dob', '$gender', '$pay')";
$data=mysqli_query($conn, $query);

if($data)
{
     echo "<script>alert(' Payment Successfully..!')</script>";
}
else
{
   echo " Failed to inserted data into Database";
}
}

?>


