<?php
include $_SERVER['DOCUMENT_ROOT'].'/_config.php';
head('index');

$database = new dbConnect();
$database->query('SELECT * FROM users');
$row = $database->resultset();

echo $row[0]['name'].' | '.$row[0]['type'];

?>

<h1>this works</h1>
<p>you are on the home page</p>


<?php foot(); ?>