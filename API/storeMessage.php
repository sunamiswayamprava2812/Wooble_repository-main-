<?php
// Set headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// Enable error reporting (development only)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include DB connection
include_once '../profile/db_connection.php';
global $conn;
$response = [];

// Check request method
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Or fallback to form POST
    $sender = $_POST['sender_id'];
    $receiver = $_POST['receiver_id'];
    $message = $_POST['message'];

    // Validate input
    if (empty($sender) || empty($receiver) || empty($message)) {
        http_response_code(400);
        echo json_encode(["status" => "error", "message" => "Missing sender, receiver, or message"]);
        exit;
    }

    // Prepare insert query
    $stmt = $conn->prepare("INSERT INTO message (sender_id, reciever_id, message, status, create_date) VALUES (?, ?, ?, 'send', NOW())");
    $stmt->bind_param("sss", $sender, $receiver, $message);

    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "Message stored successfully"]);
    } else {
        http_response_code(500);
        echo json_encode(["status" => "error", "message" => "Failed to store message"]);
    }

    $stmt->close();
    $conn->close();
} else {
    http_response_code(405);
    echo json_encode(["status" => "error", "message" => "Invalid request method"]);
}
?>
