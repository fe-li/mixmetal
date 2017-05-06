<?php session_start(); ?>
<html>
<head>
<title>Mixmetal Adm</title>
<meta http-equiv="content-type" content="text/html; charset=windows-1250">
</head>
<body>
<?php
if(isSet($_SESSION['user']))
{
  echo "Wylogowano Poprawnie<br>";
  echo "<a href=\"index.php\">Strona logowania</a>";
  session_destroy();
}
else{
  header("Location:index.php");
}
?>
</body>
</html>