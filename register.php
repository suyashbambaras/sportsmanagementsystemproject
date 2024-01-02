


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="login.css">
    
    </head>
<body>
    <div class="log_container">
        <div class="log_box">
        <h2>Register</h2>
    
        <form action="register.php" method="GET" autocomplete="off" >
           <div>
               
               <input type="text" placeholder=" Full Name" name="name"  required>
			   <input type="email" placeholder="Email" name="email" required>
			   <input type="text" placeholder="Username" name="username"  required >
			   <input type="password" placeholder="Password" name="password"  pattern=".{6,}" title="6 characters minimum"  required>
               <input type="password" placeholder="Confirm password" name="cpassword" required>
			   <input type="text" placeholder="Phone" name="phone" pattern="[0-9]{10}" title="Phone number with  10 digit with 0-9" required>
			   <input type="text" placeholder="City" name="city" required>
               <input type="submit" value="Register" name="register" >
               
           </div>
         </form>
         

        <div class="other_link">
            <a href="login.php">Login</a>
        </div>
</div>
</div>
</body>
</html>


<?php

include("config.php");
error_reporting(0);

 
 if($_GET['register']){

$name=$_GET['name'];
$email=$_GET['email'];
$username=$_GET['username'];
$password=$_GET['password'];
$cpassword=$_GET['cpassword'];
$phone=$_GET['phone'];
$city=$_GET['city'];




$query="INSERT INTO REGISTER VALUES ('$name', '$email', '$username', '$password', '$cpassword', '$phone', '$city')";
$data=mysqli_query($conn, $query);

if($data)
{
    echo "<script>alert(' Registration Successfully..!')</script>";
}
else
{
   echo " Failed to inserted data into Database";
}
 }



?>


