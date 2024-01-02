<?php
include("config.php");
error_reporting(0);

$firstname = $_GET['fn'];
$query = "DELETE FROM PAYMENT WHERE FIRSTNAME='$firstname'";

$data = mysqli_query($conn,$query);
if($data)
{
    echo "<script>alert('Record Deleted')</script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/newproject/payment_details.php">
    <?php
}
else
{
    echo "<font color='red'>Failed to delete Record from Database";
}
?>