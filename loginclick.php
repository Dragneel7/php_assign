
<?php
session_start();
if(empty($_SESSION["USERNAME"])){
  $_SESSION["USERNAME"]=$_COOKIE["user"];
   header("Location:http://192.168.121.187:8001/surya/login.php");   
    
}


include('connection.php');
//include('login.php');
echo"hi";

if($_SERVER['REQUEST_METHOD'] == "POST")
{
  $o = $_POST['user_name'];
  $m = $_POST['user_pass'];
$m=sha1($m);
  if(isset($o) && isset($m))
  {
    $sqltest="select*from php_assign where USER_NAME='$o' and  PASSWORD='$m'";
    $result = $conn->query($sqltest);
    if($result->num_rows == 1)
    {
      $_SESSION["USERNAME"]=$o;

     $sql = "SELECT NAME,NUMBER,BRANCH,INTERESTS,PROFILE  FROM php_assign where USER_NAME='$o' AND PASSWORD='$m'";
     $result1 = $conn->query($sql);

     if ($result1->num_rows > 0) {
           // output data of each row
           while($row = $result1->fetch_assoc()) {
                     $_SESSION["NAME"]=$row["NAME"];
                     $_SESSION["NUMBER"]=$row["NUMBER"];
                     $_SESSION["URL"]=$row["PROFILE"];
                     if($row["BRANCH"]==null){
 $_SESSION["BRANCH"]="NOT ADDED";
                     }else{
                     $_SESSION["BRANCH"]=$row["BRANCH"];}
                     if($row["INTERESTS"]==null){ 
 $_SESSION["INTEREST"]="NOT ADDED";

                     }
                     else{
                     $_SESSION["INTEREST"]=$row["INTERESTS"];
                     }

           }
     } else {
           echo "0 results";
     }
     $conn->close();
     if($_POST["rememberme"]=='1' || $_POST["rememberme"]=='on'){
      //setting a cookie
       include'connection.php';
      $random=rand();
      $random1=sha1($random);
      $sql1="insert into cookie_protect(ID,USER_NAME,HASH) values($random,'$o','$random1')";
      if($conn->query($sql1)===true){ echo"true";}
      $conn->close();
      echo $random;
      echo $random1;
      echo $o;
      $user=$random1;
      $cookie_name = "user";
      $cookie_value="$user";
      setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
     }
      // 86400 = 1 day
    //  echo $_SESSION["USER"];
     // echo $_COOKIE['x'];
      header("Location:http://192.168.121.187:8001/surya/feed.php");   
     exit();
    }
  }
 }



if($_SERVER['REQUEST_METHOD'] == "GET")
{
include'connection.php';
$m=$_COOKIE["user"];
$sql2="select USER_NAME from cookie_protect where HASH='$m'";
$result2=$conn->query($sql2);
if($result2->num_rows>0){
while($row=$result2->fetch_assoc()){
$n=$row["USER_NAME"];

}

}

  
  if(isset($n))
  {
    $sqltest="select*from php_assign where USER_NAME='$n'";
    $result = $conn->query($sqltest);
    if($result->num_rows == 1)
    {
      $_SESSION["USERNAME"]=$n;

     $sql = "SELECT NAME,NUMBER,BRANCH,INTERESTS,PROFILE  FROM php_assign where USER_NAME='$n'";
     $result1 = $conn->query($sql);

     if ($result1->num_rows > 0) {
           // output data of each row
           while($row = $result1->fetch_assoc()) {
                     $_SESSION["NAME"]=$row["NAME"];
                     $_SESSION["NUMBER"]=$row["NUMBER"];
                     $_SESSION["URL"]=$row["PROFILE"];
                     if($row["BRANCH"]==null){
 $_SESSION["BRANCH"]="NOT ADDED";
                     }else{
                     $_SESSION["BRANCH"]=$row["BRANCH"];}
                     if($row["INTERESTS"]==null){ 
 $_SESSION["INTEREST"]="NOT ADDED";

                     }
                     else{
                     $_SESSION["INTEREST"]=$row["INTERESTS"];
                     }

           }
     } else {
           echo "0 results";
     }
     $conn->close();
      //setting a cookie
     
    //  echo $_SESSION["USER"];
     // echo $_COOKIE['x'];
      header("Location:http://192.168.121.187:8001/surya/feed.php");   
     exit();
    }
  }
 }




?>
<html>
<head>
<title>
</title>
<body>
</body>

</html>
