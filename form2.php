<?php
$ToEmail = 'info@gmail.com';
$EmailSubject = 'Reaponse mail from WebSite!!';
$mailheader = "From: ".$_POST["email"]."\r\n";
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n";
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
$MESSAGE_BODY = "Name: ".$_POST["name"]."<br>";
$MESSAGE_BODY .= "Email: ".$_POST["email"]."<br>";
$MESSAGE_BODY .= "Phone: ".$_POST["phone"]."<br>";
$MESSAGE_BODY .= "Subject: ".$_POST["subject"]."<br>";
$MESSAGE_BODY .= "Comment/Query: ".nl2br($_POST["msg"])."<br>";
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");
echo "Mail successfully sent";
echo "<meta http-equiv='refresh' content='0; url=http://www.google.com/thankyou.html'>";
?>
