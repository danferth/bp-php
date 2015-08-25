<?php 
$pages = [
	'index' => [
		'sessions'			=>	false,
		'db'				=>	true,
		'title'				=>	'Home page',
		'description'		=>	'Welcome to the home page',
		'theme'				=>	'basic',
		'pageCSS'			=>	'',
		'pageJS'			=>	'',
		'form'				=>	false,
		'name' 				=> 'Home',
		'link' 				=> '/index.php'
	],//index
	'about' => [
		'sessions'			=>	false,
		'db'				=>	false,
		'title'				=>	'About Page',
		'description'		=>	'This is the about page',
		'theme'				=>	'basic',
		'pageCSS'			=>	'',
		'pageJS'			=>	'',
		'form'				=>	false,
		'name' 				=> 'About Us',
		'link' 				=> '/pages/about.php'
	],//about
	'contact' => [
		'sessions'			=>	false,
		'db'				=>	false,
		'title'				=>	'Contact Us',
		'description'		=>	'The contact page',
		'theme'				=>	'basic',
		'pageCSS'			=>	'',
		'pageJS'			=>	'',
		'form'				=>	true,
		'name' 				=> 'Contact Us',
		'link' 				=> '/pages/contact.php'
	],//contact

];

 ?>