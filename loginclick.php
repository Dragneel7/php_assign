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
      echo"wow";
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
