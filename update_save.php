<?php

$userId  = $_GET["Id"];
$Lname  = $_GET["Lname"];
$Fname  = $_GET["Fname"];
$passW  = $_GET["Pass"];



////specifying the credentials for connection
//$servername = "192.168.254.100";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "menu";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "update  personal_info set User_password= '".$passW."' where User_Fname = '".$Fname."'";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>