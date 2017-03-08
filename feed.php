<?php
session_start();
if(empty($_SESSION["USERNAME"])){
$_SESSION["USERNAME"]=$_COOKIE["user"];
 header("Location:http://192.168.121.187:8001/surya/loginclick.php");   
 
}
?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="feed.css">
    <title></title>
    </head>
    <body>
    
    <div id="header">
    <h1>COMMON FEED GROUND</h1>
    </div>
    <div class="feed"><span><?php if(isset($x)){echo $x;}?></span>
    <p id="add"><?php 
    include'connection.php';
   $sql="select * from feeds order by DATE";
   $result= $conn->query($sql);
   if($result->num_rows>0){
while($row=$result->fetch_assoc()){
echo $row["USER_NAME"]."(".$row["DATE"].") : ".$row["USER_FEED"]."<br>";

}
   }
   
   else{
     echo"0 result";
   }
   $conn->close();
   
   ?></p>
    <form method="post" action="fillfeed.php">
    <textarea rows="2" cols="120" name="feed"></textarea> 
    <input type="submit">
    </form>
    <a href="completeprofile.php">View profile</a>
    </div>
    </body>
    </html>
