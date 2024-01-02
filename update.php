<?php
include("config.php");
error_reporting(0);


 $name = $_GET['na'];
 $email = $_GET['em'];
 $username = $_GET['us'];
 $phone = $_GET['ph'];
 $city = $_GET['c'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Update Form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	
</head>
<style>
input{
    margin-top: 10px;
}
.table{
	
    margin-top: 10px;
    max-width: 410px;
    align-items: center;
}
.line{
    width: 300px;
    height: 3px;
    background: black;
    margin: 0 auto 60px auto;
      }
     .container{
        width: 35%;
        align: center;
        border-radius: 16px;
     }
      #button
     {
        background-color: black;
        color:white;
        width:130px;
        font-size:18px;
        height:35px;
     }
   
     </style>

<body background ="2i.jpg">
	<br><br><br><br>
	<h1 align="center">Update Details</h1>
	<div class="line"></div>
    <form action="" mathod="GET">
		<div class="container" align="center">
	<table class="table table-dark table-striped" cellspacing="0">
	<tr>
		<td>Name</td>
		<td><input type="text"  value="<?php echo "$name"?>" name="name" placeholder="Name" required></td>
	</tr>

	<tr>
		<td>Email</td>
		<td><input type="text"  value="<?php echo "$email"?>" name="email" placeholder="Email" required></td>
	</tr>

	<tr>
		<td>Username</td>
		<td><input type="text" value="<?php echo "$username"?>" name="username" placeholder="Username" required></td>
	</tr>
	<tr>
		<td>Phone</td>
		<td><input type="text" value="<?php echo "$phone"?>" name="phone" placeholder="Phone" required></td>
    </tr>
	<tr>
		<td>City</td>
		<td><input type="text" value="<?php echo "$city"?>" name="city" placeholder="City" required></td>
</tr>

	<tr>
		<td colspan="2" align="center"><a href="http://localhost/newproject/users_details.php"><input type="submit" id="button" name="submit" value = "Update Details"></a></td>
	</tr>
		</form>
	</table>
	</div>
</body>
</html>

<?php

if($_GET['submit'])
{
	$name = $_GET['name'];
	$email = $_GET['email'];
	$username = $_GET['username'];
	$phone = $_GET['phone'];
	$city = $_GET['city'];

	$query = "UPDATE REGISTER SET name='$name', email='$email', username='$username', phone='$phone', city='$city' WHERE name='$name'";

	$data = mysqli_query($conn, $query);

	if($data)
	{
		echo "<script>alert('Record Updated')</script>";
		?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/newproject/users_details.php">
    <?php
	}
	else
	{
		echo "Failed to Updated data";
	}
}


?>
