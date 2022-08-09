<?php
ini_set("SMTP", "aspmx.l.google.com");
ini_set("sendmail_from", "psantos@netquest.com");

$message = "The mail message was sent with the following mail setting:\r\nSMTP = aspmx.l.google.com\r\nsmtp_port = 25\r\nsendmail_from = psantos@netquest.com";

$headers = "From: psantos@netquest.com";

mail("Sending@provider.com", "Testing", $message, $headers);
echo "Check your email now....&lt;BR/>";
?>
