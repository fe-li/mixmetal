<?php
/*** USTAWIENIA *************************************************************/
$images_dir = 'img/portfolio/bramy'; //Sciezka do katalogu, w ktorym znajduja sie zdjecia
$thumbs_dir = 'img/portfolio/bramy/thumbs'; //Sciezka do katalogu z generowanymi miniaturami
$width = 200; //Maksymalna szerokosc miniatur
$height = 200; //Maksymalna wysokosc miniatur
$on_page = 6; //Ilosc miniatur na jednej stronie (wpisz 0, aby nie bylo limitu)


/*** SKRYPT *****************************************************************/
function images_array() { 
	global $images_dir;
	$dir = opendir($images_dir);
	$allows = array('jpg', 'JPG', 'jpeg', 'JPEG', 'png', 'PNG', 'gif', 'GIF');
	
	$array = null;
	while ($file = readdir($dir)) {
		if (is_file($images_dir.'/'.$file) && $file != "." && $file != "..") {
			$file_info = pathinfo($images_dir.'/'.$file);
			if(in_array($file_info['extension'],$allows)) {
				$array[] = $file;
			}
		}
	}
	return $array;
} //END images_array();

function create_thumb($file_path) {
	global $width, $height, $images_dir, $thumbs_dir;
	
	if(!is_dir($thumbs_dir)) mkdir($thumbs_dir, 0777);
	
	list($width_orig, $height_orig) = getimagesize($file_path);
	$ratio_orig = $width_orig/$height_orig;
	if ($width/$height > $ratio_orig) $width = $height*$ratio_orig;
	else $height = $width/$ratio_orig;

	$thumb = imagecreatetruecolor($width, $height);
	$image = imagecreatefromjpeg($file_path);
	imagecopyresized($thumb, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);

	$file_info = pathinfo($file_path);
	switch(strtolower($file_info['extension'])) {
		case 'jpg': imagejpeg($thumb, $thumbs_dir.'/'.$file_info['filename'].'.'.$file_info['extension'], 100); break;
		case 'jpeg': imagejpeg($thumb, $thumbs_dir.'/'.$file_info['filename'].'.'.$file_info['extension'], 100); break;
		case 'png': imagepng($thumb, $thumbs_dir.'/'.$file_info['filename'].'.'.$file_info['extension'], 100); break;
		case 'gif': imagegif($thumb, $thumbs_dir.'/'.$file_info['filename'].'.'.$file_info['extension'], 100); break;
	}
} //END create_thumb();

function images_list($pattern = NULL) {
	global $images_dir, $thumbs_dir, $on_page, $a_link;
	$array = images_array();
	$images_count = count($array);
	$per_page = $on_page;
	if(!$on_page) $per_page = $images_count;
	
	if(!empty($array)) {
		if(isset($_GET['page']) && is_numeric($_GET['page'])) {
			if($_GET['page'] > ceil($images_count/$per_page)) header('Location: '.$_SERVER['SCRIPT_NAME']);
			else {
				$current_page = $_GET['page'];
			}
		} else $current_page = 1;
		
		$result = null;
		for( $x = $per_page*($current_page-1); $x < $per_page*$current_page; $x++ ) {
			if(isset($array[$x])) {
				create_thumb($images_dir.'/'.$array[$x]);
				if($pattern == NULL) {
					$result .= '<a href="'.$images_dir.'/'.$array[$x].'"><img src="'.$thumbs_dir.'/'.$array[$x].'" alt="Code by Klocek" /></a>';
				} else {
					$return = str_replace("{URL}", $images_dir.'/'.$array[$x], $pattern);
					$return = str_replace("{THUMB_URL}", $thumbs_dir.'/'.$array[$x], $return);
					$result .= $return;
				}
			}
		}
	echo $result;
	} else echo 'Brak plikow graficznych w zdeklarowanym katalogu.';
} //END images_list();

function images_pagination($pattern_current = NULL, $pattern_link = NULL) {
	global $on_page;
	$array = images_array();
	$images_count = count($array);
	$return = null; $result = null;
	
	if($on_page) {
		if(isset($_GET['page']) && is_numeric($_GET['page'])) $page = $_GET['page'];
		else $page = 1;
			
			for( $x = 1; $x <= ceil(($images_count/$on_page)); $x++ ) {
				if($page == $x) {
					if($pattern_current == NULL) $result .= '<strong>'.$x.'</strong>';
					else $result .= str_replace("{NUMBER}", $x, $pattern_current);
				}
				else {
					if($pattern_link == NULL) $result .= '<a href="?page='.$x.'">'.$x.'</a>';
					else { 
						$return = str_replace("{URL}", '?page='.$x, $pattern_link);
						$return = str_replace("{NUMBER}", $x, $return);
						$result .= $return;
					}
				}
			}
	}		
	echo $result;
} //END pagination();
?>