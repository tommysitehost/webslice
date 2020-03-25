<?php
$to      = 'tommy@sitehost.co.nz';
$subject = 'Hi';
$message = 'hello';
$headers = 'From: tommy@tommyngo.co.nz' . "\r\n" .
    'Reply-To: tommy@tommyngo.co.nz' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

print_r(mail($to, $subject, $message, $headers));
?> 
