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
$name1=$_SESSION["USERNAME"];
$name=$name1;
$feed1=$_POST["feed"]; 
$feed=test_input($feed1);
/*function getRequestString($data){
if(preg_match('/^(?=[a-z]{2})(?=.{4,26})(?=[^.]*\.?[^.]*$)(?=[^_]*_?[^_]*$)[\w.]+$/iD',$data))
    {
    return $data;
    }
     else 
     {
    $m="wrong input";
    return $m;
    }

}
 $feed1=$_POST["feed"];*/
 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
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
