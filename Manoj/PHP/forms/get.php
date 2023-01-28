<html>
<body>
<?php


$servername = "127.0.0.1";
$database = "sairam";
$username = "manoj";
$password = "test";

$conn = mysqli_connect($servername, $username, $password, $database);
// Check the connection
if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}


$query = "select * from activity;";

echo '<table border="1" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Serial No</font> </td> 
          <td> <font face="Arial">Date</font> </td> 
          <td> <font face="Arial">Hours</font> </td> 
          <td> <font face="Arial">Description</font> </td>  
      </tr>';

if ($result = $conn->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["id"];
        $field2name = $row["date"];
        $field3name = $row["hours"];
        $field4name = $row["description"];
        

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
              </tr>';
    }
    $result->free();
} 


mysqli_close($conn);


?>
</body>
<html>

