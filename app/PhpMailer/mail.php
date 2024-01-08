<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


$mail = new PHPMailer(true);
try {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->Username = 'oussamaazrour@gmail.com';
    $mail->Password = 'jrab empq gvda pith';
    $mail->isHTML(true);
    $mail->setFrom('oussamaazrour@gmail.com', 'StreamStadium');
}
catch (Exception $e) {
    echo "An error occurred: {$mail->ErrorInfo}";
}
?>