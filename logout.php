<?php
session_start();
  if(isset($_COOKIE[session_name()])):
  setcookie(session_name(), '', time()-7000000, '/');
  endif;
  if(isset($_COOKIE['user'])):
    setcookie('user', '', time()-7000000, '/');
    endif;
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
