<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "railway_db";

$conn = mysqli_connect("localhost", "root", "1212", "railway_db");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>