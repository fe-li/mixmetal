<!DOCTYPE html>
<html lang="pl">
<head>
<title>Example #1</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="lightbox/lightbox.js"></script>
<link rel="stylesheet" href="lightbox/lightbox.css" type="text/css">
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="gallery">
	<?php
	require_once('../gallery.php');
	images_list('<a href="{URL}" class="thumbnail"><img src="{THUMB_URL}" /></a>');
	?>
	<div id="pagination">
	<?php images_pagination('<strong>{NUMBER}</strong>','<a href="{URL}">{NUMBER}</a>'); ?>
	</div>
</div>
</body>
</html>