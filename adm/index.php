<?php session_start(); ?>
<html>
<head>
<title>MixMetal Adm</title>
<meta http-equiv="content-type" content="text/html; charset=windows-1250">
</head>
<body>
<?php
if(isSet($_SESSION['user']))
{
  echo "<b>Witaj: </b>".$_SESSION['user'];
  echo "<a href=\"logout.php\"> Wyloguj sie</a>";
  echo "<br ><br ><br >";
  echo "<a href=\"../img/portfolio/bramy.php\">+ Dodaj zdjecie bram</a>";
  echo "<br >";
  echo "<a href=\"../img/portfolio/ogrodzenia.php\">+ Dodaj zdjecie ogrodzen</a>";
  echo "<br >";
  echo "<a href=\"../img/portfolio/balustrady.php\">+ Dodaj zdjecie balustrad</a>";
  echo "<br >";
  echo "<a href=\"../img/portfolio/konstrukcje.php\">+ Dodaj zdjecie konstrukcji</a>";
  echo "<br >";
  echo "<a href=\"../img/portfolio/nierdzewne.php\">+ Dodaj zdjecie elementow nierdzewnych</a>";
  echo "<br ><br ><br >";
  echo "<a href=\"../img/portfolio/usunbramy.php\">- Usun zdjecie bram</a>";
  echo "<br >";
  echo "<a href=\"../img/portfolio/usunogrodzenia.php\">- Usun zdjecie ogrodzen</a>";
  echo "<br >";
  echo "<a href=\"../img/portfolio/usunbalustrady.php\">- Usun zdjecie balustrad</a>";
  echo "<br >";
  echo "<a href=\"../img/portfolio/usunkonstrukcje.php\">- Usun zdjecie konstrukcji</a>";
  echo "<br >";
  echo "<a href=\"../img/portfolio/usunnierdzewne.php\">- Usun zdjecie elementow nierdzewnych</a>";
  echo "<br >";
}
else{
?>
<form method='POST' action='sprawdz.php'>
<table>
<tr><th align="right">Login:</th><td align="left"><input type='text' name='login'></td></tr>
<tr><th align="right">Haslo:</th><td align="left"><input type='password' name='haslo'></td></tr>
<tr><td align="center" colspan="2"><input type='submit' value='Wyslij' name='logowanie'></td></tr>
</table>
</form>
<?php
}
?>
</body>
</html>