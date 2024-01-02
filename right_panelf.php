<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
<table bgcolor="063146" width="100%" height="80">
        <tr>
            <td align ="center"><font color="white" size="7"><b>Welcome Food Center</td>
            <td align="right"><font color="black" size="6"><b><a href="http://localhost/newproject/logout.php">Logout</a></td>
        </tr>
    </table>
    <br><br><br>
     <table width="50%" border="0" height="220" cellspacing="25">
         <tr>
             <td width="25%" bgcolor="063146" align="center"><font color="white" size="6" align="center">Orders<br>
              <?php
              include("config.php");
              error_reporting(0);
              $query = "SELECT * FROM RESERVE";
              $data = mysqli_query($conn, $query);
              $total = mysqli_num_rows($data);
              if($data !=0)
              {
                  echo "$total";
              }
              else
              {
                  echo "No Record Found";
              }
              ?>
            </font></td>
             <td width="25%" bgcolor="063146" align="center"><font color="white" size="6">Food Items<br>
             <?php
              include("config.php");
              error_reporting(0);
              $query = "SELECT * FROM MANAGE_FOOD";
              $data = mysqli_query($conn, $query);
              $total = mysqli_num_rows($data);
              if($data !=0)
              {
                  echo "$total";
              }
              else
              {
                  echo "No Query Found";
              }
              ?>
            </font></td>
             
     </table>
</body>
</html>