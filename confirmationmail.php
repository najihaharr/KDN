<!DOCTYPE html>
<html>
<body>

<h1>Hello Mail</h1>

<p>My first mail test.</p>

<?php
$to      = 'f34ee@localhost';
$subject = 'KDN: E-mail Confirmation';
$message = 'Thank you for attending the KDN concert!';
$headers = 'From: f34ee@localhost' . "\r\n" .
    'Reply-To: f34ee@localhost' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers,'-ff34ee@localhost');
echo ("mail sent to : ".$to);
?> 

</body>
</html>
