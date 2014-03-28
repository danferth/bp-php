<?php 
include $_SERVER['DOCUMENT_ROOT'].'/classes/_form.php';

$x = new form();
$x->set_action('thankyou.php');
$x->set_method('POST');
$x->set_form_ID('testForm');

$x->jsCheck();
$x->start_form();
?>

<input type="text" name="fname" placeholder="first name">
<input type="text" name="lname" placeholder="last name">
<input type="email" name="email" placeholder="email please">
<input type="submit" value="let's go!">
</form>

<hr>

<?php 
echo 'New class <i>process</i><hr>';

$p = new process();
$p->set_module_location('/modules/form');
$p->require_mime();

?>