<?php 
include $_SERVER['DOCUMENT_ROOT'].'/__test_class.php';
include $_SERVER['DOCUMENT_ROOT'].'/__test_data.php';

?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$('.info').hide().fadeIn(2000);
	console.log('lets do this');
});
</script>
<style>.info{width:400px;padding:8px;border:1px dashed #666;}p{color:#555;margin:0 0 5px 20px;font:bold 12px sans-serif;}ul{margin:5px 0;}li{color:#666;font:normal 11px sans-serif;margin-bottom:4px;}</style>

<div class="info">
<p>You sir, are on a test page!</p>
<ul>
<li><i>__test_class.php</i> is included, and holds the class we are testing</li>
<li><i>__test_data.php</i> in included second, and contains any data the class may need (see array)</li>
<li>jQuery is also added <i>(Google CDN)</i> for any interactivity with a document ready already in place</li>
</ul>
</div>