<?php 
session_start();

// brought the email here by session so as to send the notification 
$mail = $_SESSION['email'];

// php mail() function for sending email

$to = $mail;
$subject = "Pay Assistant Notification";

$message = "
<html>
<head>
<title>Notification Message</title>
</head>
<body>
<p>Thanks for subscribing to our </p>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <support@payassistant.com>' . "\r\n";

mail($to,$subject,$message,$headers);
// if(!mail($to,$subject,$message,$headers)){
//     $_SESSION['successmessage'] = "New record created successfully";
//     header("Location:index.html");
// }
?>