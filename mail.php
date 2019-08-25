
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'C:\xampp\composer\vendor\autoload.php';
require 

$mail = new PHPMailer;
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$message2 = nl2br('Message from '.$name.' ('.$email.')\n
'.$message);
$mail->setFrom($email);
$mail->addAddress('sanjeewasenarathna03@gmail.com');
$mail->Subject = $_POST["subject"];
$mail->Body = nl2br('Message from '.$name.' ('.$email.')<br><br><br>'.$message);
$mail->IsSMTP();
$mail->SMTPSecure = 'ssl';
$mail->Host = 'ssl://smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Port = 465;
$mail->IsHTML(true);


//Set your existing gmail address as user name
$mail->Username = 'sanjeewasenarathna03@gmail.com';

//Set the password of your gmail address here
$mail->Password = '*****';
if(!$mail->send()) {
  echo 'Email is not sent.';
  echo 'Email error: ' . $mail->ErrorInfo;
  echo $message2;
} else {
  echo 'Email has been sent.';
  echo $message2;
}
?>
