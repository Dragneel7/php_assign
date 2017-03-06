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

<form action="upload.php" method="post" enctype="multipart/form-data">

<ul>
<div class="one">
<li><input type="file" name="fileToUpload" id="fileToUpload" ></li>
<li><input type="submit" value="SET PROFILE IMAGE" name="submit"></li></div>
<div class="two"><li><input type="file" name="fileToUpload" id="fileToUploadcover" ></li>
<li><input type="submit" value="SET COVER IMAGE" name="submit"></li></div>
<div class="three"> <li><input type="text" id="pass" placeholder="enter previous password"></li>
<li><input type="button" value="CHANGE PASSWORD" onclick="showw()"></li></div>
<li><input id="info" type="button" value="UPDATE INFO" ></li></div>
</ul>
</form>


</body>
</html>
