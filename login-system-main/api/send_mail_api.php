<?php
session_start();
include('../connect/connection.php');

header('Content-Type: application/json');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../vendor/autoload.php';

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';

    if (empty($email)) {
        echo json_encode(['success' => false, 'message' => 'Email is required']);
        exit;
    }

    $check_query = mysqli_query($connect, "SELECT * FROM login WHERE email ='$email'");
    $rowCount = mysqli_num_rows($check_query);

    if ($rowCount > 0) {
        $otp = rand(100000, 999999);
        $_SESSION['otp'] = $otp;
        $_SESSION['mail'] = $email;

        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'sunami@wooble.org';
            $mail->Password = 'nqqdsihpxjnynzaq';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('sunami@wooble.org', 'OTP Verification');
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = "Your verify code";
            $mail->Body = "
    <p>Dear $email,</p>
    <p>Congratulations! You have successfully registered with us.</p>
    <p>To complete your registration, please verify your email address using the One-Time Password (OTP) below:</p>
    <h3>Your verification code is: <strong>$otp</strong></h3>
    <p>Enter this code in the verification page to activate your account.</p>
    <p>We’re excited to have you on board and look forward to helping you make the most of our platform!</p>
    <br>
    <p>Best regards,<br>The Wooble Team</p>
";


            $mail->send();
            echo json_encode(['success' => true, 'message' => 'OTP sent to ' . $email]);
        } catch (Exception $e) {
            echo json_encode(['success' => false, 'message' => 'Failed to send email: ' . $mail->ErrorInfo]);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Email not found, please register.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}