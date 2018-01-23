<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php

$conector = new mysqli("localhost", "root", "", "nba");
if ($conector->connect_errno) {
 echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;
}


   ?>
  </body>
</html>
