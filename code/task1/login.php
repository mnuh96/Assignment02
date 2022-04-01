<?php
      session_start();
      if($_POST["name"] == "miran" && $_POST["password"] == "K173692"){
        $_SESSION["Login"] = "YES";
        echo "<h1>You are now logged in.</h1>";
        echo "<p><a href='document.php'>Link to Protected File</a></p>";
      }
      else{
        $_SESSION["Login"] = "NO";
        echo "<h1>You are not logged in";
        echo "<p><a href='document.php'>Link to Protected File</a></p>";
      }
    ?>
<html>
  <head>
    <title>Login</title>
  </head>
</html>
