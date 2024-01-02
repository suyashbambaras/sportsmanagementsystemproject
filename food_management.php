<!DOCTYPE html>
<html lang="en">
<head>

   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Food Management</title>
   <link rel="stylesheet" href="match.css">
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
    width: 360px;
    height: 3px;
    background: black;
    margin: 0 auto 60px auto;
    }
   .container{
        width: 55%;
        align: center;
        border-radius: 16px;
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
<body background = "#"><br>
<h1 align="center">Food Management</h1>
<div class="line"></div>
   <center>
      <div class="main">
      <form action="insertF.php" method="POST" enctype="multipart/form-data"><br>
         <label for="">Food Id:</label>
         <input type="number" name="foodid" id="foodid"><br><br>
         <label for="">Food Item:</label>
         <input type="text" name="fooditem" id=""><br><br>
         <label for="">Price:</label>
         <input type="text" name="price" id=""><br><br>
         <button name="add" id="add">Add</button>
      </form>
   </div><br><br>
   </center>

          <div class="container">
         
          <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Food Id</th>
      <th scope="col">Food Item</th>
      <th scope="col">Price</th>
      <th scope="col">Delete</th>
      <th scope="col" align="center" colspan="2">Edit / Update</th>
    </tr>
  </thead>
  <tbody>
     
        <?php
        include 'config.php';
        $pic = mysqli_query($conn,"SELECT * FROM `manage_food`");
        while($row = mysqli_fetch_array($pic)){
           echo "
                <tr>
                     <td>$row[foodid]</td>
                     <td>$row[fooditem]</td>
                     <td>$row[price]</td>
                     <td><a href='deleteF.php?fi=$row[foodid]' class='btn-btn-danger'><input type='submit' value='Delete' id='deletebtn'></a></td>
                     <td> <a href='updateF.php?fi=$row[foodid] &fm=$row[fooditem] &p=$row[price]'><input type='submit' value='Edit / Update' id='editbtn'></a></td> 
                     <td><a href=''></a></td>
                </tr>
                ";
        }

        ?>


  </tbody>
</table>

</div>

</body>
</html>