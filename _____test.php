<?php 
$test = [
		'exam' =>[
			'boo',
			'hello',
			'world'
			]
		];

class arrayTest{

	private $arr;
	function test($var){
		$this->arr = $test;
		echo $this->arr[$var][0];
	}
}//class end

$t = new arrayTest();

$t->test('exam');


?>

<p>done</p>