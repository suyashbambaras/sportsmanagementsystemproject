<?php
error_reporting(0);
    
    $host ="localhost";
    $user ="root";
    $password ="";
    $db ="newproject";

    $data = mysqli_connect($host,$user,$password,$db);
    if($data==false)
    {
        die("connection error");
    }

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $username=$_POST["username"];
        $password=$_POST["password"];

        $sql="select * from login where  username='".$username."' AND password='".$password."' ";

        $result=mysqli_query($data,$sql);

        $row=mysqli_fetch_array($result);

        if($row["usertype"]=="admin")
        {
            header("location:admin_panel.php");
            
        }
        elseif($row["usertype"]=="foodcompany")
        {
            header("location:food_panel.php");
            
        }
        
        else
        {
            echo " <script>alert('username or password incorrect')</script>";
            
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    </head>
<body>
    <div class="log_container">
        <div class="log_box">
        <h2> Login</h2>
        <form action="#" method="POST" autocomplete="off">
           <div>
               <input type="text" placeholder="username" name="username" required>
               <input type="password" placeholder="password" name="password" required>
               <input type="submit" value="login" name="">
           </div>
         </form>

        
</div>
</div>
</body>
</html>