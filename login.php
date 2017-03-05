<html>
<head>
<link rel="stylesheet" type="text/css" href="login.css">
<title></title>
<script src="login.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>

$(document).ready(function(){
    $('#sign_up').hide();
    $('#link2').click(function(){
      $('#login').fadeOut('slow',function(){
        $('#sign_up').show('slow');
        });
      });
    $('#link1').click(function(){
      $('#sign_up').fadeOut('slow',function(){
        $('#login').show('slow');
        });
      });


    });


</script>
</head>
<body>
<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
  if($_POST["password"] == null)
  {
      $x="feild is empty";
        $GLOBALS['x'];
  }

  
  
  if($_POST["name"] == null)
{
  $y="feild is empty";
  $GLOBALS['y'];
}




else {
  $y = "";
  $name = test_input($_POST["name"]);
  // check name only contains letters and whitespace
  if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
    $nameError = "Only letters and white space allowed";
  } 
}
  if( $_POST["user_name1"] == null)

{
  $z="field is empty";
  $GLOBALS['z'];
}
else{
  $user_name1=test_input($_POST["user_name1"]);
  if ( !preg_match('/^[A-Za-z][A-Za-z0-9]{5,31}$/', $user_name1) ){
  $error="invalid";
  
 }
  else{  
  $_POST["user_name1"]=$user_name1;
  
  }


}   


if($_POST["email"] == null)
{
  $a="field is empty";
  $GLOBALS['a'];
}
else {
  $email = test_input($_POST["email"]);
  // check if e-mail address syntax is valid or not
  if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
    $emailError = "Invalid email format";
  }
}

if($_POST["number"] == null)
{
  $b="field is empty";
  $GLOBALS['b'];
}
else{
$number=test_input($_POST["number"]);
if(preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $number)){ 
$num="invalid number format";
}

}
if (empty($_POST["gender"])) {
  $genderError = "Gender is required";
} 
}





function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<div class="box">
<div id="links">
<ul>
<li class="link" id="link1">Login</li>
<li class="link" id="link2">Sign Up</li>
</div>
<div id="login">
<form method="post" action="#">
<ul>
<li><input class="log" type="text" name="user_name" placeholder="Username/Email" required="required"></li>
<li><input class="log" type="password" name="user_pass" placeholder="password" required="required"></li>
<li><input type="submit" class="submit"></li>
</ul>
</form>
</div>
</ul>
<div id="sign_up">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  onsubmit="return finalcheck()">
<ul>
<li><input class="log" id="name" type="text" name="name" placeholder="Enter your Name" onchange="name1()"><span> <?php if (isset($y)) {echo "*".$y;} ?></span> <span class="error"> <?php if(isset($nameError)){echo $nameError ;}?></span> </li>
<li><input class="log" type="text" name="user_name1" placeholder="Type your username" ><span> <?php if(isset($z)){echo "*".$z;} ?></span><span class="error"> <?php if(isset($error)){ echo $error;}?></span>  </li>
<li><input class="log" type="text" name="email" placeholder="Enter Email"><span> <?php if(isset($a)){echo "*".$a;} ?></span><span class="error"> <?php if(isset($emailError)){ echo $emailError;}?></span> </li>
<li><input class="log" id="num" type="number" name="number" placeholder="Enter your number"  onchange="number1()"><span> <?php if(isset($b)){ echo"*". $b;} ?></span> <span class="error"> <?php if(isset($num)){ echo $num ;}?></span></li>
<li><input class="log" id="pass" type="password" name="password" placeholder="password" ><span><?php if(isset($x)){echo "*".$x;} ?></span>  </li>
<li><input type="radio" name="gender"> Male</input></li>
<li><input type="radio" name="gender"> female</input><li>
<span class="error"><?php if(isset($genderError)){echo "*".$genderError;} ?></span>

<li><input type="submit" class="submit"></li>
</ul>
</form>
</div>
</div>

<body>
</html>
