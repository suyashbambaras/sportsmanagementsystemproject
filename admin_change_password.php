<?php
include("config.php");
error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    </head>
    <style>
        #button{
            width: 50%;
        }
    </style>
<body background = "2i.jpg">
    <div class="log_container">
        <div class="log_box">
        <h2> Login</h2>
        <form action="#" method="POST">
           <div>
               <input type="text" placeholder="username" name="username">
               <input type="password" placeholder="password" name="password">
               <input type="submit" id="button" value="Change password" name="submit">
           </div>
         </form>

       
</div>
</div>
</body>
</html>



<?php

if($_POST['submit'])
{
	$username = $_POST['username'];
	$password = $_POST['password'];


	$query = "UPDATE LOGIN SET password='$password' WHERE username='$username'";

	$data = mysqli_query($conn, $query);

	if($data)
	{
		echo "<script>alert('Password changed')</script>";
		
	}
	else
	{
		echo "Failed to change password";
	}
}


?>