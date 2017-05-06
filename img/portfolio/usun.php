<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Untitled 1</title>
</head>

<body>
<?php
$directory="test";
$dir=opendir($directory);
$file_list="<ul>";
while($file_name=readdir($dir))
    {
    if(($file_name!=".")&&($file_name!=".."))
        {
        $file_list.='<a href="usun-plik.php?plik='.$file_name.'"><img class="example-image" src="test/'.$file_name.'"/></a>';
        }
    }
closedir($dir);
echo "
<br><center> Lista zdjęć w katalogu :</center>
$file_list";
?>
</body>

</html>
