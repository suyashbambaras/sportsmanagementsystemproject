<?php
include("config.php");
error_reporting(0);

$name = $_GET['na'];
$query = "DELETE FROM REGISTER WHERE NAME='$name'";

$data = mysqli_query($conn,$query);
if($data)
{
    echo "<script>alert('Record Deleted from Database')</script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/newproject/users_details.php">
    <?php
}
else
{
    echo "<font color='red'>Failed to delete Record from Database";
}
?>
