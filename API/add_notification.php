<?php
header('Content-Type: application/json');
require_once '../login-system-main/connect/connection.php';

$data = json_decode(file_get_contents("php://input"), true);

$user_id = $data['user_id'] ?? null;
$sender_id = $data['sender_id'] ?? null;
$type = $data['type'] ?? null;
$message = $data['message'] ?? null;
$action_link = $data['action_link'] ?? null;

if (!$user_id) {
    echo json_encode(["status" => "error", "message" => "Missing required fields"]);
    exit;
}

$sql = "INSERT INTO notification (user_id, sender_id, type, message, action_link) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("iisss", $user_id, $sender_id, $type, $message, $action_link);

if ($stmt->execute()) {
    echo json_encode(["status" => "success", "message" => "Notification added"]);
} else {
    echo json_encode(["status" => "error", "message" => $stmt->error]);
}
?>
