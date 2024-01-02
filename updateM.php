<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UpdateM Page</title>
    <link rel="stylesheet" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<style>
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
<body background="2i.jpg"><br><br><br>

<?php 
include 'config.php';
error_reporting(0);

$matchid = $_POST['matchid'];
$matchname = $_POST['matchname'];
$date = $_POST['date'];
$day = $_POST['day'];
$time = $_POST['time'];

$Record = mysqli_query($conn, "SELECT `matchid`, `matchname`, `date`, `day`, `time` FROM manage_match WHERE matchid = '$matchid'");
$data = mysqli_fetch_array($Record);
?>

    <h1 align="center">Update Match Details</h1>
    <div class="line"></div>
<center>
      <div class="main">
      <form action="updateM1.php" method="POST" enctype="multipart/form-data"><br>
         <label for="">Match Id:</label>
         <input type="number" value="<?php echo $matchid['matchid']?>" name = "matchid" id="matchid" ><br><br>
         <label for="">Match Name:</label>
         <input type="text" value="<?php echo $matchname['matchname']?>" name="matchname" id=""><br><br>
         <label for="">Date:</label>
         <input type="date"  value="<?php echo $date['date']?>" name="date" id=""><br><br>
         <label for="">Day:</label>
         <input type="text" value="<?php echo $day['day']?>" name="day" id=""><br><br>
         <label for="">Time:</label>
         <input type="text" value="<?php echo $time['time']?>" name="time" id="" ><br><br>
         
         <button type="submit" id="button" name="update">Update Details</button>
         
      </form>
   </div><br><br>
   </center>

   


</body>
</html>


