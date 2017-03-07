<?php
session_start();
?>
<html>
<head>
<title>
</title>
</head>
<body>
<?php


echo $_SESSION["NAME"];
echo $_SESSION["USER_NAME"];

echo $_SESSION["NUMBER"];
header("Location:http://192.168.121.187:8001/surya/incompleteprofile.php");

?>

</body>
</html>
