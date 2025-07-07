<?php
session_start();
include('../connect/connection.php');

header('Content-Type: application/json');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $otp_code = trim($_POST['otp_code'] ?? '');
    $session_otp = $_SESSION['otp'] ?? '';
    $session_email = $_SESSION['mail'] ?? '';

    if (empty($otp_code)) {
        echo json_encode(['success' => false, 'message' => 'OTP code is required.']);
        exit;
    }

    if (empty($session_otp) || empty($session_email)) {
        echo json_encode(['success' => false, 'message' => 'Session expired. Please request a new OTP.']);
        exit;
    }

    if ($otp_code == $session_otp) {
        // Update user status to verified (1)
        $stmt = $connect->prepare("UPDATE login SET status = 1 WHERE email = ?");
        $stmt->bind_param("s", $session_email);
        
        if ($stmt->execute()) {
            // Clear session data
            unset($_SESSION['otp']);
            unset($_SESSION['mail']);
            
            echo json_encode(['success' => true, 'message' => 'Email verified successfully! You can now login.']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Database error. Please try again.']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid OTP code. Please try again.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
} 