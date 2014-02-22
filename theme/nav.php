<?php
	$home = 			['v' => 1, 'n' => 'Home', 			'l' => '/index.php'];
	$about = 			['v' => 1, 'n' => 'About Us', 		'l' => '/pages/about.php'];
	$contact = 			['v' => 1, 'n' => 'Contact Us', 	'l' => '/pages/contact.php'];
	$products = 		['v' => 1, 'n' => 'Products', 		'l' => '/products/index.php',];
	$backpacks = 		['v' => 1, 'n' => 'Backpacks', 		'l' => '/products/backpacks/index.php'];
	$shoes = 			['v' => 1, 'n' => 'Shoes', 			'l' => '/products/shoes/index.php'];
	$hiking = 			['v' => 1, 'n' => 'Hiking', 		'l' => '/products/shoes/hiking/index.php'];
	$running = 			['v' => 1, 'n' => 'Running', 		'l' => '/products/shoes/running/index.php'];
	$dirt = 			['v' => 1, 'n' => 'Dirt', 			'l' => '/products/shoes/running/dirt/index.php'];
	$crosstraining = 	['v' => 1, 'n' => 'Crosstraining', 	'l' => '/products/shoes/running/crosstraining/index.php'];
	$marrathon = 		['v' => 1, 'n' => 'Marrathon', 		'l' => '/products/shoes/running/marrathon/index.php'];
	$sandles = 			['v' => 1, 'n' => 'Sandles', 		'l' => '/products/shoes/sandles/index.php'];

function liS($array, $class){
	if($array['v'] == 1){
		if(isset($class)){
			echo '<li class="'.$class.'"><a href="'.$array['l'].'">'.$array['n'].'</a></li>';
		}else{
			echo '<li><a href="'.$array['l'].'">'.$array['n'].'</a></li>';
		}
	}
}//liA
function liG($class, $links = []){
	if (isset($class) && $class != '') {
		echo '<ul class= "sub-nav '.$class.'">';
		foreach ($links as $key => $value) {
			echo '<li><a href="'.$value['l'].'">'.$value['n'].'</a></li>';
		}
		echo '</ul>';
	}
}

liG('hello',[$backpacks, $shoes]);
?>
<nav>
<ul class="nav">
<?php 
liS($home);
liS($about);
liS($contact);
liS($products);
liG('hello',[$backpacks, $shoes]);
				liS($hiking);
				liS($running);
						liS($dirt);
						liS($crosstraining);
						liS($marrathon);
				liS($sandles);




?>
</ul>
</nav>
