<?php


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
$id  = $_GET["id"];

  


if (isset($_POST["hehe"])){
    $Lname  = $_POST["Lname"];
    $Fname  = $_POST["Fname"];
    $passW  = $_POST["Pass"];
    $id  = $_GET["id"];

    $sql = "update personal_info set User_Fname='".$Fname."', User_LName='$Lname', User_password='".$passW."' where User_Ids = '$id'";

if ($conn->query($sql) === TRUE) {
  header("location: edit_save.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

}







$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>


</head>
<body>
<div class="container mt-4">
    <form method='POST' >
      <div class="row g-4">
        <!-- <div class="col">
          <input type="text" class="form-control" placeholder="Id Number" name="Id">
        </div> -->
        <div class="col">
          <input type="text" class="form-control" placeholder="First name" name="Fname" >
        </div>
        <div class="col">
        <input type="text" class="form-control" placeholder="Last Name" name="Lname">
        
          <div class="col">
              </div> <br>
          <input type="text" class="form-control" placeholder="Password" name="Pass"><br>
      <input type='submit' name="hehe" class="btn btn-primary" value='Update Data'>
    </form>
  
  </div>
</body>
</html>


