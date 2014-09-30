<?php
 require("phpMailer/class.phpmailer.php");
 
 //$mhSmtpMail_Server     = "mx1.hostinger.ru";       // Укажите адрес SMTP-сервера
 //$mhSmtpMail_Port       = "2525";                    // Порт SMTP-сервера, как правило 25
 //$mhSmtpMail_Username   = "info@achieveboard.esy.es"; // Имя почтового ящика (пользователя)
 //$mhSmtpMail_Password   = "diplodoc";              // и пароль к нему.
 //$mhSmtpMail_From       = "Achieve Board";       // Имя отправителя в поле From

// Обратите внимание, что в условиях нашей почтовой системы, имя пользователя требуется указывать полностью, например postmaster@domain.tld

function MailSmtp($to, $subject, $message)

{
$mail             = new PHPMailer();

$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "mail.yourdomain.com"; // SMTP server
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Host       = "mx1.hostinger.ru"; // sets the SMTP server
$mail->Port       = 2525;                    // set the SMTP port for the GMAIL server
$mail->Username   = "info@achieveboard.esy.es"; // SMTP account username
$mail->Password   = "diplodoc";        // SMTP account password

$mail->SetFrom('info@achieveboard.esy.es', 'First Last');

$mail->AddReplyTo("info@achieveboard.esy.es","First Last");

$mail->Subject    = "PHPMailer Test Subject via smtp, basic with authentication";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

$address = "all-by-my-self@yandex.ru";
$mail->AddAddress($address, "John Doe");

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}
    
}

?>