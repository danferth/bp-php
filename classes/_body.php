<?php 

class body{

	public $pageArray;
	public $title;
	public $description;
	public $pageCSS;
	public $pageJS;

	function head($page){

		if($p['sessions'] == true){
			include $_SERVER['DOCUMENT_ROOT'].'/classes/_sessions.php';
		}else{ echo "<!-- no sessions -->"; }
		
		if($p['db'] == true){
			include $_SERVER['DOCUMENT_ROOT'].'/classes/_dbConnect.php';
	
			define("DB_HOST", "localhost");
			define("DB_USER", "root");
			define("DB_PASS", "");
			define("DB_NAME", "test");
	
		}else{ echo "<!-- no db connect -->"; }
	
		include $_SERVER['DOCUMENT_ROOT'].'/theme/head.php';
	}

	function foot(){
		include $_SERVER['DOCUMENT_ROOT'].'/theme/foot.php';
	}

}//end class

?>