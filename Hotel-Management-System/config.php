<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "bluebirdhotel";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
// else{
//     echo "<script>alert('Connection Successful.')</script>";
// }

?>
