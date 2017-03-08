<?php
session_start();
include'connection.php';
$sql = "SELECT * FROM php_assign";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $_SESSION["NAME"]=$row["NAME"];
    $_SESSION["NUMBER"]=$row["NUMBER"];
   $_SESSION["USERNAME"]=$row["USER_NAME"];
   $_SESSION["INTEREST"]=$row["INTERESTS"];





  }
} else {
  echo "0 results";
}
$conn->close();






header("Location:http://192.168.121.187:8001/surya/profile.php ");




?>
<html>
<head>
<title>
</title>
</head>
<body>
</body>
</html>
