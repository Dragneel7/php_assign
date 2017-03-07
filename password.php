<?php
session_start()
  ?>
 <html>
 <head>
 <title>
 </title>
 </head>
 <body>
<?php
include 'connection.php';
print_r($_POST);
$passp=$_POST["prevpass"];
$passn=$_POST["newpass"];
$sql="update php_assign set PASSWORD='$passn' where PASSWORD='$passp'";
if($conn->query($sql)===TRUE){
  echo"hello";}
   else {
         echo "Error updating record: " . $conn->error;
   }

$conn->close();
 header("Location:http://192.168.121.187:8001/surya/profile.php "); /* Redirect browser */
$_SESSION["VAR"]="PASSWORD CHANGED";
?>
 </body>
 </html>
