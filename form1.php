<?php
$ToEmail = 'info@gmail.com';
$EmailSubject = 'Reaponse mail from WebSite for Request for Quote!!';
$mailheader = "From: ".$_POST["email"]."\r\n";
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n";
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
$MESSAGE_BODY = "Premises Type: ".$_POST["Premises_type"]."<br>";
$MESSAGE_BODY .= "Email: ".$_POST["email"]."<br>";
$MESSAGE_BODY .= "Cleaning Type: ".$_POST["cleaning_type"]."<br>";
$MESSAGE_BODY .= "Specific of Partial Clean: ".$_POST["specific_of_partial_clean"]."<br>";
$MESSAGE_BODY .= "Suburb: ".$_POST["Suburb"]."<br>";
$MESSAGE_BODY .= "No. of Bedroom: ".$_POST["Bedrooms"]."<br>";
$MESSAGE_BODY .= "No. of Bathrooms: ".$_POST["bathrooms"]."<br>";
$MESSAGE_BODY .= "Steam Clean carpets : ".$_POST["steam"]."<br>";
$MESSAGE_BODY .= "Type of Garage: ".$_POST["type_of_garage"]."<br>";
$MESSAGE_BODY .= "Premises Furnished: ".$_POST["premises_furnished"]."<br>";
$MESSAGE_BODY .= "Real Estate Agent: ".$_POST["real_estate_agent"]."<br>";
$MESSAGE_BODY .= "Comments: ".$_POST["comments"]."<br>";

$MESSAGE_BODY .= "Full Name: ".nl2br($_POST["full_name"])."<br>";
$MESSAGE_BODY .= "Contact Number: ".nl2br($_POST["contact_number"])."<br>";
$MESSAGE_BODY .= "Email Address: ".nl2br($_POST["email_address"])."<br>";
$MESSAGE_BODY .= "Prefered Cleaning Date: ".nl2br($_POST["day"/"Month"/"Year"])."<br>";
$MESSAGE_BODY .= "Who Told You About Us: ".nl2br($_POST["who_told_you_about_us"])."<br>";
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");
echo "Mail successfully sent";
echo "<meta http-equiv='refresh' content='0; url=www.google.com'>";
?>
