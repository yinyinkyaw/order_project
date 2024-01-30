<?php
$to       = 'yinyinkyaw13@gmail.com';
$subject  = 'Send Testing Mail';
$message  = 'Hi, you just received an email using sendmail!';
$headers  = 'From: yinyinkyaw.zotefamily@gmail.com';
if (mail($to, $subject, $message, $headers))
    echo "Email sent";
else
    echo "Email sending failed";
