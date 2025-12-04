<?php
ini_set("SMTP","aspmx.l.google.com");
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "From: test@gmail.com" . "\r\n";
mail("email@domain.com","test subject","test body",$headers);
?>