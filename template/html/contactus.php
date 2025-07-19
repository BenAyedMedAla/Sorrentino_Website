<?php
$name=$_POST["name"];
$email=$_POST["emailaddresse"];
$tlf=$_POST["Phonenumber"];
$message=$_POST["message"];

require"vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail= new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth=true;
$mail->Host="smtp.gmail.com";
$mail->SMTPSecure=PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port ="587";
$mail->Username="ttalo1097@gmail.com";
$mail->Password="xpmy yhui nmup cjpq";
$mail->Subject ="contact";
$mail->setFrom("ttalo1097@gmail.com",$email);
$mail->addAddress("alabenayed214@gmail.com");
$mail->Body=" $message
name: $name
phone number: $tlf";
$mail->Send();
header('location:index.html');
$mail->SmtpClose();
?>