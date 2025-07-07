<?php
session_start();
include('../connect/connection.php');

header('Content-Type: application/json');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (empty($email) || empty($password)) {
        echo json_encode(['success' => false, 'message' => 'Email and password are required.']);
        exit;
    }


    $stmt = $connect->prepare("SELECT * FROM login WHERE email = ?");     
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if (!$result) {
        echo json_encode(['success' => false, 'message' => 'Query failed: ' . $connect->error]);
        exit;
    }

    $count = $result->num_rows;

    if ($count > 0) {
        $fetch = $result->fetch_assoc();
        $hashpassword = $fetch["password"];

        if ($fetch["status"] == 0) {
            echo json_encode(['success' => false, 'message' => 'Please verify your email account before login.']);
        } else if (password_verify($password, $hashpassword)) {
            $_SESSION['user_email'] = $email;
            echo json_encode(['success' => true, 'message' => 'Login successful!']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Email or password invalid, please try again.']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Email not found.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}
