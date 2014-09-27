<?php
$mail_to = $_POST['entry.667989067'];
$FName = $_POST['entry.298721489'];
$LName = $_POST['entry.451930275'];

$mail_from = 'projectpitchatnu@gmail.com';
$subject = '[Project Pitch] Application Received';

$body_message = 'Dear '.$FName.' '.$LName.',

Thank you for submitting your application. We look forward to reviewing your application.

If you have any questions feel free to contact suzeehan2015@u.northwestern.edu or michaelchen2015@u.northwestern.edu 

Thanks,
Project Pitch Team';
$headers = 'From: '.$mail_from."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);
if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will get back to you as soon as possible.');
		alert($mail_to);
		window.location = 'index.html';
	</script>
<?php
}

?>