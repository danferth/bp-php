<?php 

class form{

	private $action;
	private $method;
	private $form_ID;
	//SETTERS
	function set_action($var){
		$this->action = $var;
	}
	function set_method($var){
		$this->method = $var;
	}
	function set_form_ID($var){
		$this->form_ID = $var;
	}
	//GETTERS
	function get_action(){
		return $this->action;
	}
	function get_method(){
		return $this->method;
	}
	function get_form_ID(){
		return $this->form_ID;
	}

	//methods

	function jsCheck(){
		$id = $this->get_form_ID();
		$str = <<<EOD
		<script>
		$(document).ready(function(){

			$('<input>').attr({
    			type: 'hidden',
    			name: 'JQcheck',
  				value: 'hasJQ'})
			.appendTo('form#$id');

			$('#$id').validate();
		});
		</script>
EOD;
		echo $str;
	}

	function start_form(){
		echo '<form action="'.$this->get_action().'" method="'.$this->get_method().'" id="'.$this->get_form_ID().'">';
	}


}//END form class

/*
process
	-require mimemail.php
	-trim method
	-$query_string
	-$server_dir
	-$next_page
	-header
	-jsCheck if statement
	-
*/
class process extends form{
	
}




 ?>