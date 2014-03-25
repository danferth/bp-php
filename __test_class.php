<?php 

class test{

	private $variable;

	function set_variable($var){
		$this->variable = $var;
	}
	function get_variable(){
		return $this->variable;
	}

	function statement($foo, $bar){
		$var = $this->get_variable();
		$srt = <<<STR
		The thing is
		I don't know how this will look in the end<br>
		<br>
		I was hoping that I could insert $foo or maybe
		Insert $bar as well.<br><br>

		Or even use class variables like here: $var.

STR;

	echo $srt;

	}

}

 ?>