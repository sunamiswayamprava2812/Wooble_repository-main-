<?php
// Show any errors (for development)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Set JSON response + CORS headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

// Connect to database
require_once '../../login-system-main/connect/connection.php';

if (!isset($connect) || $connect->connect_error) {
    echo json_encode([
        "success" => false,
        "message" => "Database connection failed."
    ]);
    exit;
}

// Read POST data
$user_id = $_POST['user_id'] ?? null;
$question_id = $_POST['question_id'] ?? null;
$comment_text = $_POST['comment_text'] ?? null;

// Validate input
if (!$user_id || !$question_id || !$comment_text) {
    echo json_encode([
        "success" => false,
        "message" => "Missing required fields (user_id, question_id, comment_text)."
    ]);
    exit;
}

// Sanitize inputs
$user_id = mysqli_real_escape_string($connect, $user_id);
$question_id = mysqli_real_escape_string($connect, $question_id);
$comment_text = mysqli_real_escape_string($connect, $comment_text);

// Insert into database
$sql = "INSERT INTO question_comments (user_id, question_id, comment_text, created_at) 
        VALUES ('$user_id', '$question_id', '$comment_text', NOW())";

if (mysqli_query($connect, $sql)) {
    echo json_encode([
        "success" => true,
        "message" => "Comment posted successfully."
    ]);
} else {
    echo json_encode([
        "success" => false,
        "message" => "Database error: " . mysqli_error($connect)
    ]);
}
?>
