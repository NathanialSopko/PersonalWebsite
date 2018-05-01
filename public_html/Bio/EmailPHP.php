<?php
// the message
$theirName= $_GET['Name'];
$to = "natesopko@gmail.com";
$subject = $_GET['Subject'];
$message = $_GET['Message'];
$email = $_GET['Email'];
$headers = '';
// use wordwrap() if lines are longer than 70 characters
$message = wordwrap($message,70);

$headers = "From:". $email . "\r\n" .
// send email
mail($to,$subject,$message, $headers);
echo "<script>window.close();</script>";
?>