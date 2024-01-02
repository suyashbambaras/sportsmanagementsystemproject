<html>
<head>
<title>Food Order Details</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
  <style>
     body{
      margin: 0;
      padding:0;
      background: url("f2.jpg");
      background-repeat: no-repeat;
      align-items: center;
    background-size: auto;
    background-size: 120% 130%;

   }
      .line{
    width: 400px;
    height: 3px;
    background: black;
    margin: 0 auto 60px auto;
     }
     .container{
        width: 40%;
        align: center;
     }
      #deletebtn
     {
        background-color: blue;
        color:white;
        width:130px;
        font-size:18px;
        height:35px;
     }
   
     </style>
<body background="#">
   <br><br><br><br>
   <h1 align="center">Food Order Details</h1>
   <div class="line"></div>
<div class="container">
<table class="table table-dark table-striped" align="center" colspan="2">

<tr>
<th>User</th>
<th>Food</th>
<th>Operation</th>

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
      <td>".$result['food']."</td>
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