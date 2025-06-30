<?php
$to = "tomcrist10101@gmail.com";
$subject = "Test Email";
$message = "Hello! This is a simple test email.";
$headers = "From: no-reply@example.com";

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Failed to send email.";
}
?>