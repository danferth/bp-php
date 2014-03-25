<?php 
include $_SERVER['DOCUMENT_ROOT'].'/classes/_form.php';
//include $_SERVER['DOCUMENT_ROOT'].'/__test_class.php';

echo 'start<br><hr>';




$x = new form();
$x->set_action('thankyou.php');
$x->set_method('POST');
$x->set_form_ID('testForm');

echo 'vars set up<br><br>';

$x->jsCheck();
$x->start_form();

echo '<br><br>form started';
?>

<input type="text" name="fname" placeholder="first name">
<input type="text" name="lname" placeholder="last name">
<input type="email" name="email" placeholder="email please">
<input type="submit" value="let's go!">
</form>

<hr>

<?php 




 ?>
