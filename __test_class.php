<?php 

class test{

	private $pageArray;
	private $page;
	private $title;
	private $description;
	private $pageCSS;
	private $pageJS;

	function setPageArray($var){
		$this->pageArray = $var;
	}

	function head($var){

		$this->page = $var;
		$currentPage = $this->pageArray[$this->page];

		echo $currentPage['description'];

	}

}

 ?>