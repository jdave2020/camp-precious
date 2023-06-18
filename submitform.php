<?php

$to = "braenrotich28@gmail.com";
$subject = $_POST['subject'];
$name = $_POST['name'];
$email = $_POST['email'];;
$phone = $_POST['phone'];

$details = "Name: " . $name . "\n\n" . "Subject: " . $subject . "\n\n" . "Phone: " . $phone . "\n\n" . "email: " . $email . "\n\n";
$signature = "Kind Regards," . "\n\n" . "Camp Precious" . "\n\n" . "Email: braenrotich28@gmail.com" . "\n\n" . "Website: http://campprecious.com";

$message = $name . " wrote the following on CampPrecious.com Contacts page:" . "\n\n" . $_POST['message'] . "\n\n" . "\n\n" . "Here are the main Details:" . "\n\n" . $details;
$message2 = "Here is a copy of your message " . $name . ":" . "\n\n" . $_POST['message'] . "\n\n" . "\n\n" . $signature;
$sender = 'info@campprecious.com';

$headers2 = 'From:' . $sender;

$headers = 'From:' . $sender
    . "\r\n" .
    "CC: jerodavee@gmail.com";

if (mail($to, $subject, $message, $headers)) {
    mail($email, $subject, $message2, $headers2);
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
} else {
    echo "Error: Message not Sent, Please try again";
}
