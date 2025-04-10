<?php

# "config" variables
$URL = "https://cesium.one/i/"; # should have trailing slash

if ((isset($_FILES['image'])) && ($_FILES['image']['size'] > 0))  {
	$errors= array();
	$file_size = $_FILES['image']['size'];
	$file_name = $_FILES['image']['name'];
	$file_tmp = $_FILES['image']['tmp_name'];
	$file_type = $_FILES['image']['type'];
	$file_ext = strtolower(end(explode('.',$_FILES['image']['name'])));

	if(empty($errors)==true) {
		$new_name = substr(md5_file($file_tmp), 0, 8).".".$file_ext;
		if($file_ext==$file_name) {
			$new_name = substr(md5_file($file_tmp), 0, 8);
		}
		move_uploaded_file($file_tmp,"./".$new_name);
	} else {
	print_r($errors);
	}
}

# display only the link to the upload if we're receiving it from cURL
$UA=$_SERVER['HTTP_USER_AGENT'];
if (strpos($UA, 'curl') !== false) {
	print $URL;
	print $new_name;
} else {
	include('ui.php');
}
?>
