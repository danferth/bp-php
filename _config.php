<?php
$mobileView = true;
function head($page){
	include '_pages.php';

	$p 				= $pages[$page];
	$title 			= $p['title'];
	$description 	= $p['description'];
	$pageCSS 		= $p['pageCSS'];
	$pageJS 		= $p['pageJS'];

	if($p['sessions'] == true){
		include $_SERVER['DOCUMENT_ROOT'].'/theme/_sessions.php';
	}else{ echo "<!-- no sessions -->"; }
	if($p['db'] == true){
		include $_SERVER['DOCUMENT_ROOT'].'/theme/_dbConnect.php';
	}else{ echo "<!-- no db connect -->"; }

	include $_SERVER['DOCUMENT_ROOT'].'/theme/head.php';
}
function foot(){
	include $_SERVER['DOCUMENT_ROOT'].'/theme/foot.php';
}

?>