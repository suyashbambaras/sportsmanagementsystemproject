
<?php
    include("config.php");
    error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="styleC.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <div class="contact-section">

  <h1>Contact Us</h1>
  <div class="border"></div>
  <form class="contact-form" action="" method="GET">
    <input type="text" name="name" class="contact-form-text" placeholder="Your name">
    <input type="email" name="email" class="contact-form-text" placeholder="Your email">
    <input type="text" name="phone" class="contact-form-text" placeholder="Your phone">
    <textarea name="msg"  class="contact-form-text" placeholder="Your message"></textarea>
    <input type="submit" class="contact-form-btn" value="Send" name="submit">
    

    </div>
  </form>
  </div>
</body>
</body>
</html>


<?php

 if($_GET['submit']){

$name=$_GET['name'];
$email=$_GET['email'];
$phone=$_GET['phone'];
$msg=$_GET['msg'];

$query="INSERT INTO CONTACT VALUES ('$name', '$email', '$phone', '$msg')";
$data=mysqli_query($conn, $query);

if($data)
{
    echo "<script>alert(' Request Send Successfully..!')</script>";
}
else
{
   echo " Failed to Request Send";
}
 }

?>

