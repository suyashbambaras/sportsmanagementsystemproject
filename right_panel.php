<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Welcome Admin</title>
</head>
<body>
    <table bgcolor="063146" width="100%" height="80">
        <tr>
            <td align ="center"><font color="white" size="7"><b>Welcome Admin</td>
            <td align="right"><font color="black" size="6"><b><a href="http://localhost/newproject/logout.php">Logout</a></td>
        </tr>
    </table>
    <br><br><br>
     <table width="90%" border="0" height="220" cellspacing="25">
         <tr>
             <td width="20%" bgcolor="063146" align="center"><font color="white" size="6">Users<br>
              <?php
              include("config.php");
              error_reporting(0);
              $query = "SELECT * FROM REGISTER";
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
             <td width="20%" bgcolor="063146" align="center"><font color="white" size="6">Querys<br>
             <?php
              include("config.php");
              error_reporting(0);
              $query = "SELECT * FROM CONTACT";
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
             <td width="20%" bgcolor="063146" align="center"><font color="white" size="6" align-item = "center" >Ticket Reserve<br>
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
             <td width="20%" bgcolor="063146" align="center"><font color="white" size="6" align="center">Income</font></td>
         </tr>
     </table>
</body>
</html>