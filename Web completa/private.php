<?php

//echo "Cookies: " . $_COOKIE['auth_id'];


include "./conf/database.php";
include "restricted.php";


?>

<!DOCTYPE HTML>

<html>

<head>
  <title>Panel de administración</title>
</head>

<body>

<h3>Zona privada!</h3>

<a href="logoff.php">Logoff</a>

<?php include "admin.php"?>

</body>

</html>