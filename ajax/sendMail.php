<?php
require "../autoload.php";

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

$mail = new PHPMailer(true); // Passing `true` enables exceptions
try {
  //Server settings
  $mail->SMTPOptions = array(
    'ssl' => array(
      'verify_peer'       => false,
      'verify_peer_name'  => false,
      'allow_self_signed' => true,

    ),
  );
  $mail->isSMTP(); // Set mailer to use SMTP
  $mail->Host     = 'tls://smtp.gmail.com:587'; // Specify main and backup SMTP servers
  $mail->SMTPAuth = true; // Enable SMTP authentication
  $mail->Username = 'teresa.vlncn@gmail.com'; // SMTP username
  $mail->Password = 'apathetic15'; // SMTP password

  //Recipients
  $mail->setFrom($_GET['email'], "Rio Villanuevo");
  $mail->addAddress($_GET['email']);

  //Contentr
  $mail->isHTML(true); // Set email format to HTML
  $mail->Subject = 'Here is the subject';
  $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

  $mail->send();
  echo 'Message has been sent';
} catch (Exception $e) {
  echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>