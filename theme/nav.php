<?php
function liA($array, $class){

		if(isset($class)){
			echo '<li class="'.$class.'"><a href="'.$pages[$array]['link'].'">'.$pages[$array]['name'].'</a></li>';
		}else{
			echo '<li><a href="'.$pages[$array]['link'].'">'.$pages[$array]['name'].'</a></li>';
		}
}//liA

function __li_open($link, $class){

	if(isset($class)){
		echo  '<li><a href="'.$pages[$link]['link'].'">'.$pages[$link]['name'].'</a>';
		echo "<ul class='sub-nav ".$class."'>";
	}else{
		echo  '<li><a href="'.$pages[$link]['link'].'">'.$pages[$link]['name'].'</a>';
		echo "<ul class='sub-nav'>";
	}
}

function __li_close(){
	echo "</li></ul>";
}
?>
<nav>
<ul class="nav">
	<?php 
	liA($home);
	liA($about);
	liA($contact);
		__li_open($products);
		liA($backpacks);
			__li_open($shoes);
			liA($hiking);
				__li_open($running);
				liA($dirt);
				liA($crosstraining);
				liA($marrathon);
				__li_close();
			liA($sandles);
			__li_close();
		__li_close();

echo $pages['product']['link'];

?>
</ul>
</nav>