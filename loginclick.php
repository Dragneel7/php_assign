<html>
<head>
<title>
</title>
</head>
<body>
<?php
include('connection.php');
//include('login.php');
if($_SERVER['REQUEST_METHOD'] == "POST")
{
  $o = $_POST['user_name'];
  $m = $_POST['user_pass'];

  if(isset($o) && isset($m))
  {
    $sqltest="select*from php_assign where USER_NAME='$o' and  PASSWORD='$m'";
    $result = $conn->query($sqltest);
    if($result->num_rows == 1)
    {
     header("Location:http://192.168.121.187:8001/surya/profile.php "); /* Redirect browser */
     exit();
    }
    else
    {
      echo"wrong";
    }
  }
}
?>
</body>
</html>
