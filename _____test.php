<?php 
include $_SERVER['DOCUMENT_ROOT'].'/__test_class.php';
include $_SERVER['DOCUMENT_ROOT'].'/_pages.php';



$x = new test();
$x->setPageArray($pages);
$x->head('hiking');


 ?>