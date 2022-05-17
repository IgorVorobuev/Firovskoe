<?php 
	
	if ($_POST['subject'] == 1) {
		$subject = 'Заявление на дрова';
	}
	elseif ($_POST['subject'] == 2) {
		$subject = 'Консультация';
	}
	elseif ($_POST['subject'] == 3) {
		$subject = 'Другой вопрос';
	} else {
		$subject = 'Заявление на дрова';
	}

	$to ="vorobyeval228@mail.ru";
	$from = trim($_POST['email']);

	$message = htmlspecialchars($_POST['message']);
	$message = urldecode($message);
	$message = trim($message);

	$file = 
	$headers = "From: $from" . "\r\n" .
	"Reply-To: $from" . "\r\n" . 
	"X-Mailer: PHP/" . phpversion();

	if (mail($to,$subject,$message,$headers,$file)) {
		echo 'Письмо отправлено';
	} else {
		echo 'Письмо не отправлено';
	}
 ?>