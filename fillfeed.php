<?php
session_start();
if(empty($_SESSION["USERNAME"])){
  $_SESSION["USERNAME"]=$_COOKIE["user"];
}

?>
<html>
<head>
<title>
</title>
</head>
<body>
<?php
include'connection.php';
$name=$_SESSION["USERNAME"];
$feed=$_POST["feed"];
$sql="insert into feeds (USER_FEED,USER_NAME) value('$feed','$name')";
if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
$_SESSION["FEED"]=$feed;
echo $_SESSION["FEED"];
echo $_SESSION["USERNAME"];
 header("Location:http://192.168.121.187:8001/surya/feed.php ");
?>
</body>
</html>
