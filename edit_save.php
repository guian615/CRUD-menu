<?php
include "header.php";
//$userN  = $_GET["thisUser"];
//$passW  = $_GET["thisPass"];

?>
<div class="container-fluid mt-4">
<?php

////specifying the credentials for connection
//$servername = "192.168.254.100";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "menu";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

//   $sql = "SELECT * samplecraud(Username, Password, Status)   
// VALUES ('".$userN."', '".$passW."', 'Active')";

// for (var i = 0; i<$sql.length;i++){
    
    $query = "SELECT * FROM personal_info";
    
    echo '<table class="table  " > 
                <tr style="background-color: magenta;"> 
                    <td> <font face="Arial">ID</font> </td> 
                    <td> <font face="Arial">FIRSTNAME</font> </td> 
                    <td> <font face="Arial">LASTNAME</font> </td> 
                    <td> <font face="Arial">PASSWORD</font> </td> 
                    <td> <font face="Arial">UPDATE</font> </td> 
                    <td> <font face="Arial">DELETE</font> </td> 
                    <td> <a href="home.html" class="btn btn-warning btn-sm text-white">CREATE</a> </td> 
          
                </tr>';
          
          if ($result = $conn->query($query)) {
              
            while ($row = $result->fetch_assoc()) {
                $field1 = $row["User_Ids"];
                $field2 = $row["User_Fname"];
                $field3 = $row["User_LName"];
                $field4 = $row["User_password"];

               
                echo '<tr style="background-color:light;"> 
                          <td>'.$field1.'</td> 
                          <td>'.$field2.'</td> 
                          <td>'.$field3.'</td> 
                          <td>'.$field4.'</td>
                          <td><a href="update.php?id='.$field1.'" class="btn btn-success">Update</a></td> 
                          <td><a href="delete.php?id='.$field1.'" class="btn btn-danger">Delete</a></td> 
                          <td></td> 

                          
                      </tr>';
            }
            $result->free();
        } else{
        }
    // while($row = $result->fetch_array()){
    //     $col1 = $row['userName'];  
    //     $col2 = $row['passWord']; 
    //     $col3 = $row['status'];
    //     echo $col1;
    //     echo $col2;
    //     echo $col3;
    // }   
?>
</div>