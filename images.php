<?php
include_once("config.php");

if (!isset($_REQUEST['category'])) {
	print -1;
	exit;
}
$loc = LOC_IMAGES."/".$_REQUEST['category'];
if (!is_dir($loc)) {
	print -1;
	exit;
}
if ($handle = opendir($loc)) {
	/* This is the correct way to loop over the directory. */
	$all_images_names = array();
	while (false !== ($entry = readdir($handle))) {
		if ($entry != "." && $entry != "..") {
			$all_images_names[] = $entry;
		}
	}
	closedir($handle);
	$image_choice = rand(0, count($all_images_names)-1);
	$b64 =  base64_encode(
		file_get_contents("$loc/".$all_images_names[$image_choice])
	);
	print $b64;
}
else {
	print -1;
	exit;
}


