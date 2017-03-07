<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="profile.css">
<title></title>
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


<form action="upload.php" method="post" enctype="multipart/form-data">

<ul>
<div class="one">
<li><input type="file" name="fileToUpload" id="fileToUpload" ></li>
<li><input type="submit" value="SET PROFILE IMAGE" name="submit"></li></div>
<div class="two"><li><input type="file" name="fileToUpload" id="fileToUploadcover" ></li>
<li><input type="submit" value="SET COVER IMAGE" name="submit"></li></div>
</ul>
</form>
<div class="three"> 
<form method="post" action="password.php">
<li><input type="password" name="prevpass" placeholder="enter previous password"></li>
<li><input type="password"  name="newpass" placeholder="enter new password"></li>
<li><input type="submit" value="change password"></li>
<span><?php if(isset($_SESSION["VAR"]))echo $_SESSION["VAR"]; ?></span>
</form>
</div>

<div class="four"><ul>
<li><span>Name: <?php if(isset($_SESSION["NAME"])){echo $_SESSION["NAME"];}?></span></li>
<li><span>User name: <?php if(isset($_SESSION["USERNAME"])){echo $_SESSION["USERNAME"];}?></span></li>
<li><span> User contact: <?php if(isset($_SESSION["NUMBER"])){echo $_SESSION["NUMBER"];}?></span></li>
<li><span>Branch: <?php if(isset($_SESSION["BRANCH"])){ echo $_SESSION["BRANCH"];}?></span></li>
<li><span>Interests:  <?php if(isset($_SESSION["INTEREST"])){ echo $_SESSION["INTEREST"];}?></span></li>


</form>
<ul>
</div>
<form method="post" action="logout.php">
<input type="submit" value="LOG OUT" id="log" >
</form>
<div class="five">
<form method="post" action="change.php">
<ul>
<li><input type="text" name="name" placeholder="new name "></li>
<li><input type="text" name="username" placeholder="new username "></li>   
<li><input type="number" name="contact" placeholder="new contact number "></li>   
   
<li><input type="text" name="interest" placeholder="change interests "></li> 
<li><input type="submit" value="change info ">
</form>
</div>

</body>
</html>
