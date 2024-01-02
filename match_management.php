


<!DOCTYPE html>
<html lang="en">
<head>

   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Match Management</title>
   <link rel="stylesheet" href="">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
   .container{
        width: 75%;
        align: center;
   }
   .main{
    background-color: #8b9190;
    border-radius: 16px;
    margin-top: 10px;
    max-width: 410px;
    align-items: center;
}
input{
    margin-top: 10px;
}
.line{
    width: 400px;
    height: 3px;
    background: black;
    margin: 0 auto 40px auto;
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
     #add
     {
        background-color: black;
        color:white;
        width:130px;
        font-size:18px;
        height:35px;
     }
     </style>
<body background = "2i.jpg"><br>
<h1 align="center">Match Management</h1>
<div class="line"></div>
   <center>
      <div class="main">
      <form action="insert.php" method="POST" enctype="multipart/form-data"><br>
         <label for="">Match Id</label>
         <input type="number" name="matchid" id="matchid"><br><br>
         <label for="">Match Name</label>
         <input type="text" name="matchname" id=""><br><br>
         <label for="">Date:</label>
         <input type="date" name="date" id=""><br><br>
         <label for="">Day</label>
         <input type="text" name="day" id=""><br><br>
         <label for="">Time</label>
         <input type="text" name="time" id="" ><br><br>
         <button name="add" id="add">Add</button><br>
      </form>
   </div><br><br>
   </center>

          <div class="container">
         
         <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Match Id</th>
      <th scope="col">Match Name</th>
      <th scope="col">Date</th>
      <th scope="col">Day</th>
      <th scope="col">Time</th>
      <th scope="col">Delete</th>
      <th scope="col" align="center" colspan="2">Edit / Update</th>
    </tr>
  </thead>
  <tbody>
     
        <?php
        include 'config.php';
        error_reporting(0);
        $pic = mysqli_query($conn,"SELECT * FROM manage_match");
        
        while($row = mysqli_fetch_array($pic)){
           echo "
                <tr>
                     <td>$row[matchid]</td>
                     <td>$row[matchname]</td>
                     <td>$row[date]</td>
                     <td>$row[day]</td>
                     <td>$row[time]</td>
                     <td><a href='deleteM.php?mi=$row[matchid]'><input type='submit' value='Delete' id='deletebtn'></a></td>
                     <td><a href='updateM.php?mi=$row[matchid] &mn=$row[matchname] &dt=$row[date] &d=$row[day] &t=$row[time]'><input type='submit' value='Edit / Update' id='editbtn'></a></td> 
                     
                </tr> ";
             
      }
      

        ?>


  </tbody>
</table>

</div>

</body>
</html>

 