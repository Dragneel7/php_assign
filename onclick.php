<?php
session_start();
include'connection.php';
$name=$_SESSION["USER_NAME"];
echo$name;
$sql="select * from php_assign where USER_NAME='$name'";
$result=$conn->query($sql);
if($result->num_rows>0){
  while($row=$result->fetch_assoc()){
      $_SESSION["NAME"]=$row["NAME"];
                             $_SESSION["NUMBER"]=$row["NUMBER"];
                                                    $_SESSION["USERNAME"]=$name;
                                                                           $_SESSION["BRANCH"]=$row["BRANCH"];
                                                                                                  $_SESSION["INTEREST"]=$row["INTERESTS"];
                                                                                                                         $_SESSION["URL"]=$row["PROFILE"];
  }

  $conn->close();
   header("Location:http://192.168.121.187:8001/surya/incompleteprofile.php ");
    exit();
}
?>
<html>
<head>
<title>
</title>
</head> 
<body>
</body>
</html>

