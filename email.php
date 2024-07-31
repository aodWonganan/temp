<?php
$to = "aod849203@gmail.com";
$subject = "Test Email";
$message = "Hello! This is a simple email message.";
$headers = "From: aod.wonganan@gmail.com" . "\r\n" .
           "Reply-To: aod.wonganan@gmail.com" . "\r\n" .
           "X-Mailer: PHP/" . phpversion();

if (mail($to, $subject, $message, $headers)) {
    echo "ส่งอีเมลสำเร็จ.";
} else {
    echo "ไม่สามารถส่งอีเมลได้.";
}
?>
