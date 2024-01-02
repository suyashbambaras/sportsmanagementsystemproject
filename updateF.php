<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UpdateF Page</title>
    <link rel="stylesheet" href="">
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
    background-size: 120% 150%;

   }
    .line{
    width: 400px;
    height: 3px;
    background: black;
    margin: 0 auto 60px auto;
      }
    .main{
    background-color: #8b9190;
    margin-top: 10px;
    max-width: 410px;
    align-items: center;
}
input{
    margin-top: 10px;
}
#button
     {
        background-color:black;
        color:white;
        width:150px;
        font-size:18px;
        height:35px;
     }
</style>
<body><br><br>

<?php 
include 'config.php';
error_reporting(0);

$foodid = $_POST['matchid'];
$fooditem = $_POST['fooditem'];
$price = $_POST['price'];


$Record = mysqli_query($conn, "SELECT `foodid`, `fooditem`, `price` FROM manage_food WHERE foodid = '$foodid'");
$data = mysqli_fetch_array($Record);


?>

    <h1 align="center">Update Food Details</h1>
    <div class="line"></div>
<center>
      <div class="main">
      <form action="updatef1.php" method="POST" enctype="multipart/form-data"><br>
         <label for="">Food Id:</label>
         <input type="number" value="<?php echo "$foodid"?>" name = "foodid" id="foodid" ><br><br>
         <label for="">Food Item:</label>
         <input type="text" value="<?php echo "$fooditem"?>" name="fooditem" id=""><br><br>
         <label for="">Price:</label>
         <input type="text"  value="<?php echo "$price"?>" name="price" id=""><br><br>
         
         
         <button type="submit"  id="button" name="update">Update Details</button>
         
      </form>
   </div><br><br>
   </center>

   


</body>
</html>


