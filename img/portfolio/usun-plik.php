<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Untitled 1</title>
</head>

<body>
<?php 
$file_name = $_GET['plik']; 

$file_name = basename($file_name);
// tutaj jakies sprawdzenie zeby nikt Ci nie wpisal np. usun.php?plik=usun.php .
//usuwanie to usuwanie, trzeba bardzo uwazac na ataki XSS. ale to juz na Twojej glowie :)
         if( unlink("test/".$file_name )  ) { 
        // tutaj w tym if'e tez zabezpieczenie jest na to ze 
        // usuwany plik musi byc w katalogu np. images ( jesli $file_name jest filtrowana od takich sztuczek: '../../../' )

         echo '<br><center><input type="text" align="center"  value="Skasowano" class="dobre-dane"></input><br>Zostaniesz przeniesiony do poprzedniej strony</center><br>';
         } else {
         echo '<br><center><input type="text" align="center"  value="Nie skasowano" class="zle-dane"></input></center><br>';
         };
?>
</body>

</html>
