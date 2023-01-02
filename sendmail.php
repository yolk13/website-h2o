<?php
if(isset($_FILES['cv'])){
      $errors= array();
      $file_name = $_FILES['cv']['name'];
      $file_size = $_FILES['cv']['size'];
      $file_tmp = $_FILES['cv']['tmp_name'];
      $file_type = $_FILES['cv']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['cv']['name'])));
      
      $expensions= array("jpeg","jpg","png","pdf");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a PDF, JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
    else{
         print_r($errors);
      }
   }
 $emailErr ='';  

 
if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $mailto = $_POST['email'];
  }

$mailName = $_POST['name'];
$mailNumber = $_POST['number'];
$mailPosition = $_POST['position'];
$mailMsg = $_POST['aboutyou'];

if(empty($file_name)){
    echo "No file";
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
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
   $mail ->Subject = "Application for the post of $mailPosition";
   $mail ->Body = "You recieved an application for the post of $mailPosition . <br>
   					Applicants Name: $mailName <br>
   					Email: $mailto <br>
   					Contact: $mailNumber <br> 
   					About $mailName: <br>
   					    $mailMsg";
   $mail->addAttachment($file_tmp, $file_name);
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