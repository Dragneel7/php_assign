
<?php
session_start();

include('connection.php');
//include('login.php');
echo"hi";
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
      $_SESSION["USERNAME"]=$o;

      
      
     $sql = "SELECT NAME,NUMBER,BRANCH,INTERESTS  FROM php_assign where USER_NAME='$o' AND PASSWORD='$m'";
     $result1 = $conn->query($sql);

     if ($result1->num_rows > 0) {
           // output data of each row
           while($row = $result1->fetch_assoc()) {
                    echo $row["NcAME"];
                     $_SESSION["NAME"]=$row["NAME"];
                     $_SESSION["NUMBER"]=$row["NUMBER"];
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
      header("Location:http://192.168.121.187:8001/surya/feed.php "); /* Redirect browser */

    
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
