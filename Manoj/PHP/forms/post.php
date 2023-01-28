<html>
<body>
<?php

$activityDate = $_POST['activityDate'];
$noOfHours = $_POST['noOfHours'];
$activityDescription = $_POST['activityDescription'];

$servername = "127.0.0.1";
$database = "sairam";
$username = "manoj";
$password = "test";

$conn = mysqli_connect($servername, $username, $password, $database);
// Check the connection
if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}
echo "Connected to DB successfully <br/>";

$sql = "INSERT INTO activity (date, hours, description) VALUES ('". $activityDate ."',". $noOfHours .",'". $activityDescription ."' )";
if (mysqli_query($conn, $sql)) {
     echo "New record created successfully";
} else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);


?>


</body>
</html>
