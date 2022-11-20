<?php
if(isset($_REQUEST['contactForm']))
{
	$to = "contact@emencaffe.com";
	$from = $_REQUEST['email'];
	$name = $_REQUEST['name'];
	$subject = $_REQUEST['subject'];
	$phone = $_REQUEST['phone'];
	$message = $_REQUEST['message'];

	$headers = "From:  $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	$mailsubject = "You have a message by Website.";

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<tbody>";
	
	$body .= "<tr><td style='border:none;'><strong>Dear Admin,</strong></td></tr>";
	$body .= "<tr><td style='border:none;'>You have got a new email from website. Please find the details below:</td></tr>";
	$body .= "<tr><td style='border:none;'>&nbsp;</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Name:</strong> {$name}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Email Address:</strong> {$from}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Phone Number:</strong> {$phone}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$subject}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Message:</strong> {$message}</td></tr>";
	$body .= "<tr><td style='border:none;'>&nbsp;</td></tr>";
	$body .= "<tr><td style='border:none;'>Thank you</td></tr>";
	
	$body .= "</tbody></table>";
	$body .= "</body></html>";

	$send = mail($to, $mailsubject, $body, $headers);
	header('Location:thank_you.html');
	die();
}
?>