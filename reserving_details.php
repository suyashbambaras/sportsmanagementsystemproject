<html>
<head>
<title>Ticket Reserving Details</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
  <style>
      
     .line{
    width: 450px;
    height: 3px;
    background: black;
    margin: 0 auto 60px auto;
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
<body background="2i.jpg">
   <br><br><br><br>
   <h1 align="center">Ticket Reserving Details</h1>
   <div class="line"></div>
   <div class="container">
   <table class="table table-dark table-striped">

<tr>
<th>User</th>
<th>Email</th>
<th>Phone</th>
<th>Match Name</th>
<th>Part</th>
<th>Reserving Date</th>
<th>Food</th>
<th>Parking</th>
<th>Opreation</th>

</tr>

<?php

include("config.php");
error_reporting(0);


$query = "select * from reserve";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if($total!=0)
{
   
   while($result=mysqli_fetch_assoc($data))
   {
      echo "
      <tr>
      <td>".$result['user']."</td>
      <td>".$result['email']."</td>
      <td>".$result['phone']."</td>
      <td>".$result['matchname']."</td>
      <td>".$result['part']."</td>
      <td>".$result['date']."</td>
      <td>".$result['food']."</td>
      <td>".$result['parking']."</td>
      <td> <a href='deletereserve.php?user=$result[user]'><input type='submit' value='Delete' id='deletebtn'></a></td>
      
      </tr>    ";
   }
}
else
{ 
   //echo "No records found";
}
?>

</table>
</div>

</body>
</html>