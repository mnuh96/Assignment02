<?php
  session_start();
if($_SESSION["Login"] != "YES")
{
  header("Location: index.php");
}
session_destroy();
?>
<html>
  <head>
    <title>Document</title>
  </head>
  <body>
    <h1>This Document is protected</h1>
    <p>You can only see this if you are logged in.</p>
  </body>
</html>
