<?php
session_start();
if(empty($_SESSION["USER_NAME"])){
    $_SESSION["USER_NAME"]=$_COOKIE["user"];
}

 include 'connection.php';
 $name=$_SESSION["USER_NAME"];
 $branch=$_POST["branch"];
 
 $interest=$_POST["interest"];
 $sql="update php_assign set BRANCH='$branch', INTERESTS='$interest' where USER_NAME='$name'"; 
 if($conn->query($sql)===TRUE){
   echo"hello its done";
 }
else {
      echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
 header("Location:http://192.168.121.187:8001/surya/click.php "); /* Redirect browser */

?>
