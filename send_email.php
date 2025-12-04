<?php
$errors = [];
//https://mailtrap.io/blog/html-form-send-email/
if (!empty($_POST)) {
    $name = $_POST['naam'];
    $email = $_POST['email'];
    $aantalpups = $_POST['aantalpups'];
    $pupsuitzelfenest = $_POST['pupsuitzelfenest'];
    $geboortedatumpups = $_POST['geboortedatumpups'];
    $raspups = $_POST['raspups'];
    $voorkeursdatum = $_POST['voorkeursdatum'];
    $voorkeursuur = $_POST['voorkeursuur'];
    $extrainformatie = $_POST['extrainformatie'];

    if (empty($errors)) {  
        $recipient = "desmetsander1206@gmail.com";
        $message = "bericht van " . $name . "\n e-mail: " . $email;
       $headers = "From: $name <$email>";
        echo"$recipient, $message, $headers";
        // Send email
        ini_set("SMTP","aspmx.l.google.com");
        if (mail($recipient, $message, $headers)) {
            echo "Email sent successfully!";}
         else {
            echo "Failed to send email. Please try again later.";
        }}
else{
    // Not a POST request, display a 403 forbidden error
    header("HTTP/1.1 403 Forbidden");
    echo "You are not allowed to access this page.";
}}