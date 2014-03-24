<?php
// used for sending of email and adding attachments and such http://www.gerd-tentler.de/tools/
require_once("mimemail.inc.php");

$first_name = trim($_POST['fname']);
// Build the query string to be attached to the redirected URL
$query_string = '?first_name=' . $first_name;
// Redirection domain and phisical dir
$server_dir = $_SERVER['HTTP_HOST'] . rtrim(dirname($_SERVER['PHP_SELF']), '/\\') . '/';
$next_page = 'thank-you.php';
/* The header() function sends a HTTP message The 303 code asks the server to use GET when redirecting to another page */
header('HTTP/1.1 303 See Other');

if (!isset($_POST['JQcheck'])){
	// Back to form page
   		$next_page = 'index.php';
   		// Add error message to the query string
		$error = "nojava";
  		 $query_string .= '&error=' . $error;
  		 // redirect to contact page
  		 header('Location: http://' . $server_dir . $next_page . $query_string);
	}else{
		if (is_array($_POST))
		{
			$body  = sprintf("<html>"); 
			$body .= sprintf("<body>");
			$body .= sprintf("<h2>Title for recieved email:</h2>\n");
			$body .= sprintf("<hr />");
			$body .= sprintf("\nName: <strong>%s %s</strong><br />\n",$_POST['fname'],$_POST['lname']);
			//this is for form inputs not required
			if ($_POST['notrequired-input'] == "value of not required input"){
				$notrequired = "";
				}else{$title = $_POST['notrequired-input'];}

			if ($notrequired !=""){
			$body .= sprintf("\nnotrequired: <strong>".$notrequired."</strong><br />\n");
			}
			$body .= sprintf("\nEmail: <strong>%s</strong><br />\n",$_POST['email']);
			$body .= sprintf("<br />");
			$body .= sprintf("<br /><hr />");
			$body .= sprintf("For internal use:<br />\n");
			$body .= sprintf("<br />-----------------<br />\n");
			$body .= sprintf("\nSender's IP: %s<br />\n", $_SERVER['REMOTE_ADDR']);
			$body .= sprintf("\nReceived: %s<br />\n",date("Y-m-d H:i:s"));
			$body .= sprintf("</body>");
			$body .= sprintf("</html>");

			if ($_POST['email'])
					{
						$mail = new MIMEMAIL("HTML");
						$mail->senderName = $_POST['fname']." ".$_POST['lname'];
						$mail->senderMail = $_POST['email'];
						//$mail->bcc = "bcc@email.com";
						$mail->subject = "EMAIL SUBJECT - " . $_POST['fname'];
						$mail->body = $body;
						$mail->create();
						$mail->send('recievers@email.com');
						if ($mail)
							{
								header('Location: http://' . $server_dir . $next_page . $query_string);
							}
					}

		}
	}
?>