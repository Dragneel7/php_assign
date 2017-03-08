<?php 
session_start();
include'connection.php';
$name=$_POST["name"];
$username=$_POST["username"];
$contact=$_POST["contact"];
$interest=$_POST["interest"];
$uname=$_SESSION["USERNAME"];
$sql="update php_assign set NAME='$name',USER_NAME='$username',NUMBER='$contact',INTERESTS='$interest' where USER_NAME='$uname' ";
if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
} else {
      echo "Error updating record: " . $conn->error;
}

$conn->close();
 header("Location:http://192.168.121.187:8001/surya/infochange.php ");
exit();
?>
<html>
<head>
<title>
</title>
</head>
<body>
</body>
</html>








?>
