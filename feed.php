<?php
session_start();
?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="feed.css">
    <title></title>
    </head>
    <body>
    <?php
include'connection.php';
if($_SERVER['REQUEST_METHOD']==='POST'){
if(empty($_POST["feed"])){  
$x="field is empty";
    }
else{ 
  $m = test_input($_POST["feed"]); 

if(isset($m)){
$sql="insert into feeds(USER_FEED)
values('$m')";
if($conn->query(sql)===true){
echo"feed added";
}
else{ 
echo"error".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
}
    }
}

function test_input($data) {
    $data = trim($data);
      $data = stripslashes($data);
        $data = htmlspecialchars($data);
          return $data;
}
    ?>
    <div id="header">
    <h1>COMMON FEED GROUND</h1>
    </div>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <textarea rows="25" cols="140" name="feed_del" form="post"></textarea>
    <div class="feed"><span><?php if(isset($x)){echo $x;}?></span>
    <textarea rows="2" cols="120" name="feed" form="post"></textarea>
    
    <input type="submit">
    </form>
    <form method="post" action="completeprofile.php">
    <input type="submit" value="view profile">
    </form>
    
    </div>
    </body>
    </html>
