<?php
session_start();
if(empty($_SESSION["USE_RNAME"])){
    $_SESSION["USER_NAME"]=$_COOKIE["user"];
}

?>
<html>
<head>
<title>
</title>
</head>
<body>
<?php
 header("Location:http://192.168.121.187:8001/surya/profile.php ");
    ?>
    </body>
    </html>
