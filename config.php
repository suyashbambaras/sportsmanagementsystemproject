<?php 

$server = "localhost";
$user = "root";
$password = "";
$database = "newproject";

$conn = mysqli_connect($server, $user, $password, $database);

if($conn)
{
    //echo "Connection OK";
}
else
{
    echo "Connection Failed" .mysqli_connect_error();
}

?>