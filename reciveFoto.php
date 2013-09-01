<?php
	$data = $_POST['photo'];
	$file =  'FOTODESDEHTML5('.date("m-d-y").')('.date("H-i-s").').png';
	file_put_contents($file, base64_decode(substr($data, strpos($data, ",")+1)));
	echo "<a href='./".$file."'>Link a tu imagen</a>";

?>