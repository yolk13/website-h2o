<?php
$mailto = $_POST['email'];
$mailName = $_POST['name'];
$mailNumber = $_POST['number'];
$mailDate = $_POST['date'];
$mailTime = $_POST['time'];
$mailPax = $_POST['pax'];
$mailMsg = $_POST['request'];

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
   $mail ->Subject = "Reservation Mail For Basantapur";
   $mail ->Body = "You recieved Reservation Request by $mailName For Basantapur. <br>
                    Reservation Date: $mailDate <br> Email: $mailto , Contact: $mailNumber <br> Reservation Time: $mailTime <br> Number of PAX: $mailPax<br> Special Request: <br> $mailMsg";
   //$mail->addAttachment("$mailAttachment");
   $mail ->AddAddress('foodhubbyh2o@gmail.com');

     if(!$mail->Send())
   {
       echo "mail not sent";
   }
   else
   {
       echo 'mail sent';
        ?>
        <script type="text/javascript">
          window.location = "http://h2ocafeandpub.com.np/basantapur";
        </script> 
        <?php
   }

?>