<?php
$mailto = $_POST['email'];
$mailName = $_POST['name'];
$mailNumber = $_POST['number'];
$mailMsg = $_POST['message'];

// $_FILES["fileToUpload"]
if (empty($mailMsg)) {
    $mailMsg = 'There is no Special Request.';
}

require 'PHPMailer-master/class.phpmailer.php';
require 'PHPMailer-master/class.smtp.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "mail.h2ocafeandpub.com.np";
   $mail ->Port = 465;
  $mail ->IsHTML(true);
    $mail ->Username = "info@h2ocafeandpub.com.np";
   $mail ->Password = "hamropassword@h2o1";
   $mail ->SetFrom("$mailto");
   $mail ->Subject = "Contact Message From $mailName";
   $mail ->Body = "You have been contacted by:  $mailName <br> Contact Number: $mailNumber <br> Email: $mailto <br> Message: <br> $mailMsg";
   //$mail->addAttachment("$mailAttachment");
   $mail ->AddAddress('foodhubbyh2o@gmail.com');

   //   if(!$mail->Send())
   // {
   //     echo "mail not sent";
   // }
   // else
   // {
   //     echo 'mail sent';
   // }

?>