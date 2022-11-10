<?php
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;


   require 'phpmailer/src/Exception.php';
   require 'phpmailer/src/PHPMailer.php';


   $mail = new PHPMailer(true);
   $mail->CharSet = 'UTF-8';
   $mail->setLanguage('ru', 'phpmailer/language/');
   $mail->isHTML(true);

   $mail->setFrom('info@example.com', 'Test Name');
   $mail->addAddress('jmsfreedown@icloud.com');
   $mail->Subject = "Hello! It's front end developer!";


   $body = '<h1>You have new message </h1>';

 
   if(trim(!empty($_POST['email']))){
   	$body.='<p><strong>E-mail:</strong> '.$_POST['email'].'</p>';
   }

  

$mail->Body = $body;

if(!$mail->send()){
	$message = 'Error';
} else {
	$message = 'Data sent!';
}

$response = ['message' => $message];
echo json_encode($response);
?>