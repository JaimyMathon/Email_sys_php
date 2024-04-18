<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['fullName'];
    $company = $_POST['company'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "youremail@gmail.com";
    $mail->Password = "Your password";
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;
    $mail->From = "youremail@gmail.com";
    $mail->FromName = $fullName; // Set the sender's name
    $mail->addAddress("youremail@gmail.com", "Recipient Name");
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = "<p><strong>Name: </strong>$fullName</p>
                <p><strong>Company: </strong>$company</p>
                <p><strong>Phone Number: </strong>$phoneNumber</p>
                <p><strong>Email: </strong>$email</p>
                <p><strong>Subject: </strong>$subject</p>
                <p><strong>Message: </strong>$body</p>";
    $mail->AltBody = "This is the plain text version of the email content";

    if(!$mail->send()) {
        $message = "Mailer Error: " . $mail->ErrorInfo;
    } else {
        $message = "Message has been sent successfully";
        header("Location: index.php");
    }
}
?>