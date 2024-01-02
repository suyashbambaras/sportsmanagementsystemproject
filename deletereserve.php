<?php
include("config.php");
//error_reporting(0);

$user = $_GET['user'];
$query = "DELETE FROM RESERVE WHERE USER ='$user'";

$data = mysqli_query($conn,$query);
if($data)
{
    echo "<script>alert('Deleted Details')</script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/newproject/reserving_details.php">
    <?php
}
else
{
    echo "<font color='red'>Failed to delete Record from Database";
}
?>
