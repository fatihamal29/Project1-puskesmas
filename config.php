<?php


$server = "localhost";
$user = "root";
$pass = "root";
$database = "dbpuskesmas2";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>
