<?php
$hostname = "127.0.0.1:4306";
$username = "root";
$password = "";
$dbname = "chatdb";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "";
