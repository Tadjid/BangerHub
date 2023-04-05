<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "ktadjid@gmail.com";
    $headers = "From: " . $mailFrom;
    $txt = "Vous avez reçu un mail de la part de" . $name . ".\n" . $message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php");
}


?>