<?php


$id  = $_GET["id"];

////specifying the credentials for connection
//$servername = "192.168.254.100";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "menu";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
// Check connection
// Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }

// sql to delete a record
// if(isset($_POST['delete'])){
//   $Fname = $_POST['Fname'];
//   $Lname = $_POST['Lname'];
//   $passW = $_POST['password'];

//   $_SESSION['message'] = " Data was Deleted!!";
//   $_SESSION['msg_type'] = "danger";
// }
$sql = "delete from  personal_info where User_Ids = '$id'";

if (mysqli_query($conn, $sql)) {
  
  header("location: edit_save.php");
 
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>