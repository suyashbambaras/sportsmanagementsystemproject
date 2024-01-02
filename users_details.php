<html>
<head>
<title>User Details</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
  <style>
     .line{
    width: 250px;
    height: 3px;
    background: black;
    margin: 0 auto 60px auto;
}
     #editbtn
     {
        background-color:green;
        color:white;
        width:130px;
        font-size:18px;
        height:35px;
     }
     #deletebtn
     {
        background-color:blue;
        color:white;
        width:130px;
        font-size:18px;
        height:35px;
     }
     </style>
<body background= "2i.jpg">
   <br><br><br>
   <h1 align="center">User Details</h1>
   <div class="line"></div>
   
   <div class="container">
   <table class="table table-dark table-striped">
  
   <tr>
<th> Name</th>
<th>Email</th>
<th>Username</th>
<th>Password</th>
<th>Confirm Password</th>
<th>Phone</th>
<th>City</th>
<th align="center" colspan="2">Operation</th>

</tr>




<?php

include("config.php");


$query = "select * from register";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if($total!=0)
{
   
   while($result= mysqli_fetch_assoc($data))
   {
      echo "
      <tr>
      <td>".$result['name']."</td>
      <td>".$result['email']."</td>
      <td>".$result['username']."</td>
      <td>".$result['password']."</td>
      <td>".$result['cpassword']."</td>
      <td>".$result['phone']."</td>
      <td>".$result['city']."</td>
      <td> <a href='update.php?na=$result[name] &em=$result[email] &us=$result[username] &ph=$result[phone] &c=$result[city]'><input type='submit' value='Edit / Update' id='editbtn'></a></td> 
      <td> <a href='delete.php?na=$result[name]'><input type='submit' value='Delete' id='deletebtn'></a></td>         
      </tr>    ";
   }
}
else
{ 
   echo "No records found";
}
?>

</table>
</div>
</body>
</html>