<?php

//$userN  = $_GET["thisUser"];
//$passW  = $_GET["thisPass"];



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
    
    echo '<table border="0" cellspacing="2" cellpadding="2" width = "50%"> 
      <tr style="background-color: magenta;"> 
          <td> <font face="Arial">ID</font> </td> 
          <td> <font face="Arial">NAMES</font> </td> 
          <td> <font face="Arial">PASSWORDS</font> </td> 
          <td> <font face="Arial">STATUS</font> </td> 
      </tr>';
          
          if ($result = $conn->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $field1 = $row["User_Ids"];
                $field2 = $row["User_Fname"];
                $field3 = $row["User_LName"];
                $field4 = $row["User_password"];
         
                echo '<tr style="background-color:skyblue;"> 
                          <td>'.$field1.'</td> 
                          <td>'.$field2.'</td> 
                          <td>'.$field3.'</td> 
                          <td>'.$field4.'</td> 
                          
                      </tr>';
            }
            $result->free();
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
