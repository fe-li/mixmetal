<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Untitled 1</title>
</head>

<body>
  <?php
    $dir = 'uploads/';
    $max_file_size = 30000000;
    $change_name = false; $name_length = 55;

    if(!file_exists($dir)) exit('Katalog '.$dir.' nie istnieje!');

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['upload'])) {

        $tmp_name = $_FILES['userfile']['tmp_name'];
        $name = $_FILES['userfile']['name'];
        $type = $_FILES['userfile']['type'];
        $size = $_FILES['userfile']['size'];
        $error = $_FILES['userfile']['error'];
       
        $explode_name = explode('.',$name);
        $extension = @$explode_name[1];
$date = date('H:i:s_d.m.Y');
       
        if($change_name) {
            $name = $explode_name[0];
            $new_name = substr(md5($name),0,$name_length).'.'.$extension;

            $path = $dir.$new_name.$date;
        }
        else {
            $path = $dir.$name.$date;
        }
       
        $dirname = dirname($_SERVER['SCRIPT_NAME']) == '/' || dirname($_SERVER['SCRIPT_NAME']) == '\\' ? null : dirname($_SERVER['SCRIPT_NAME']);
       
        $full_path = 'http://'.$_SERVER['HTTP_HOST'].$dirname.'/'.$path;
       
        if($error == UPLOAD_ERR_NO_FILE) {
            echo 'Wybierz plik.';
        }
        elseif($error == UPLOAD_ERR_PARTIAL) {
            echo 'Błąd! Plik został tylko częściowo załadowany.';
        }
        elseif($error == UPLOAD_ERR_NO_TMP_DIR) {
            echo 'Błąd! Brak folderu tymczasowego.';
        }
        elseif($error == UPLOAD_ERR_INI_SIZE) {
            echo 'Błąd! Plik jest za duży dla serwera.';
        }
        elseif($size > $max_file_size) {
            echo 'Za duży plik.';
        }
        else {
       
            if(is_uploaded_file($tmp_name)) {
           
                if(move_uploaded_file($tmp_name,$path)) {
                    echo 'Plik został wysłany. <br /><a href="'.$full_path.'">'.$full_path.'</a><br><br>';
                }
                else {
                    echo 'Nie udało się wysłać pliku. Spróbuj później.';
                }
         
            }
            else {
                echo 'Co ty próbujesz.';
            }
       
        }
           
    }

    ?>
    <center>
    <form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="userfile" />
        <input type="submit" name="upload" value="Wy¶lij" />
    </form>
    </center></body>

</html>
