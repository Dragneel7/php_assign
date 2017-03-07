<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
echo"hello";
header("Location:http://192.168.121.187:8001/surya/login.php");
?>

</body>
</html> 
