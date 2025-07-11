<?php
header('Content-Type: application/json');
require_once '../login-system-main/connect/connection.php';
global $connect;

$data = json_decode(file_get_contents("php://input"), true);

$user_id = $data['user_id'] ?? null;
$type = $data['type'] ?? null;
$sender_id = $data['sender_id'] ?? null;
$message = $data['message'] ?? null;
$is_read = $data['is_read'] ?? 0;
$created_at = $data['created_at'] ?? date('Y-m-d H:i:s');

if (!$user_id) {
    echo json_encode(["status" => "error", "message" => "Missing required fields."]);
    exit;
}

$sql = "INSERT INTO notification ( user_id, type, sender_id, message, is_read, created_at) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $connect->prepare($sql);
$stmt->bind_param("isssis", $user_id, $type, $sender_id, $message, $is_read, $created_at);

if ($stmt->execute()) {
    echo json_encode(["status" => "success", "message" => "Notification sent successfully"]);
} else {
    echo json_encode(["status" => "error", "message" => $stmt->error]);
}
?>
