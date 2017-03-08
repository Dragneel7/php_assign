<?php



if(isset($_POST["user_name1"]))
{

$s =$_POST["user_name1"];
include'connection.php';
$sql="select * from php_assign where USER_NAME='$s'";
$result=$conn->query($sql);
if($result->num_rows>0){
  echo "user name taken";
}
}

/*  if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
    die();
  }
  include'connection.php';
  //$username = filter_var($_POST["username"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);

  $statement = $mysqli->prepare("SELECT USER_NAME FROM php_assign WHERE username=?");
  $statement->bind_param('s', $username);
  $statement->execute();
  $statement->bind_result($username);
  if($statement->fetch()){
    die('<p>no <p/>');
  }else{
    die('<p>yes <p/>');
  }
}
*/
?>
