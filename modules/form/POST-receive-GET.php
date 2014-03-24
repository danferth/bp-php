

<script>
$(document).ready(function(){
//this adds hidden input at end of form for js check on submit
$('<input>').attr({
    type: 'hidden',
    name: 'JQcheck',
  	value: 'hasJQ'})
.appendTo('form#ID-of-form');
//jQuery form validator download latest http://bassistance.de/jquery-plugins/jquery-plugin-validation/
$('#ID-of-form').validate();
});
</script>

<?php
//if javascript is disabled user will be returned to this page with query of noJava and this error message will show
if (isset($_GET['error'])){
   echo "<p class=\"error\">Our apologies ".$_GET['first_name'].", this form requires JavaScript enabled to submit, please enable JavaScript in your browser and reload the page for it to work properly. <br /><br /> If you are unable to turn on JavaScript please call 1-800-541-4792 PST to contact Thomson Instrument Company.  We apologies again for any inconvenience.</p>";
  }
?>

<form action="send.php" method="post" id="ID-of-form">
		<p class="required">* denotes a required field</p>

		<p>
			<label for="fname">First Name<span>*</span></label>
			<input type="text" name="fname" id="fname" required>
		</p>
		<p>
			<label for="lname">Last Name<span>*</span></label>
			<input type="text" name="lname" id="lname" required>
		</p>
		<p>
			<label for="email">email<span>*</span></label>
			<input type="email" name="email" id="email" required>
		</p>
		<p>
			<input type="submit" value="Click to Submit">
		</p>
	</form>