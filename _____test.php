<?php 

function test($var){

$test = [
		'exam' =>[
			'boo',
			'hello',
			'world'
			]
		];

	echo $test[$var][0];
}

test('exam');

?>