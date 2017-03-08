<?php 

include'connection.php';
$m=$_COOKIE["user"];
$sql2="select USER_NAME from cookie_protect where HASH='$m'";
$result2=$conn->query($sql2);
if($result2->num_rows>0){
  while($row=$result2->fetch_assoc()){
    $n=$row["USER_NAME"];

  }

}
$conn->close();




if(empty($_SESSION["USER_NAME"])){
    $_SESSION["USER_NAME"]=$n;
}


session_start();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="profile.css">
<title></title>
<SCRIPT >
function showw(){
    document.getElementById('pass').style.display="block";
}
</SCRIPT>
</head>
<body>
<h1>USER'S PROFILE</h1>
<br>
<br>
<br>
<br>
<br>
<br>
<hr>

<img id="image" src="<?PHP echo$_SESSION["URL"]; ?>" alt="add profile">
<form action="upload.php" method="post" enctype="multipart/form-data">

<ul>
<div class="one">
<li><input type="file" name="fileToUpload" id="fileToUpload" ></li>
<li><input type="submit" value="SET PROFILE IMAGE" name="submit"></li></div>
</ul>
</form>
<div class="four"><ul>
<li><span>Name: <?php if(isset($_SESSION["NAME"])){echo $_SESSION["NAME"];}?></span></li>
<li><span>User name: <?php if(isset($_SESSION["USER_NAME"])){echo $_SESSION["USER_NAME"];}?></span></li>
<li><span> User contact: <?php if(isset($_SESSION["NUMBER"])){echo $_SESSION["NUMBER"];}?></span></li>

<form action="addinterest.php" method="post">

<li><input type="text" placeholder="add branch(optional)" name="branch" ></li>
<li><input type="text" placeholder="add area of interests(optional)" name="interest"></li>
<li><input type="submit"></li>
</form>
<ul>
</div>

</body>
</html>
