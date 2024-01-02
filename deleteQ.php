<?php
include("config.php");
error_reporting(0);

$name = $_GET['na'];
$query = "DELETE FROM CONTACT WHERE NAME='$name'";

$data = mysqli_query($conn,$query);
if($data)
{
    echo "<script>alert('Query Deleted')</script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/newproject/query_reports.php">
    <?php
}
else
{
    echo "<font color='red'>Failed to delete Record from Database";
}
?>
