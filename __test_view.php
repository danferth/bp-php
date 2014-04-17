<?php 
include $_SERVER['DOCUMENT_ROOT'].'/__test_class.php';
include $_SERVER['DOCUMENT_ROOT'].'/__test_data.php';

?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
	console.log('lets do this');
});
</script>
<style>.info{width:400px;padding:8px;border:1px dashed #666;}p{color:#555;margin:0 0 5px 20px;font:normal 11px sans-serif;}</style>
<div class="info">
<p>You sir, are on a test page!</p>
<p><i>__test_class.php</i> is included, and holds the class we are testing</p>
<p><i>__test_data.php</i> in included second, and contains any data the class may need (see array)</p>
<p>jQuery is also added <i>(Google CDN)</i> for any interactivity with a document ready already in place</p>
</div>