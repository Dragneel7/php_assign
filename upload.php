<?php 
session_start();
print_r($_POST);
print_r($_FILES);
if(isset($_FILES["fileToUpload"])){
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
  echo $_FILES["fileToUpload"]["name"];
 $name= $_SESSION["USERNAME"];
 echo $name;
  $url="uploads/".$_FILES["fileToUpload"]["name"];
  echo "<br>".$_SESSION["URL"];

include'connection.php';
$sql = "update php_assign set PROFILE='$url' where USER_NAME='$name'";
}
if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location:http://192.168.121.187:8001/surya/click.php ");
?>
<html>
<head>
<title>
</title>
</head>
<body>
</body>
</html>

