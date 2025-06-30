<?php
header('Content-Type: application/json');
include_once '../profile/db_connection.php';
global $conn;

$responce = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $senderUserId = $_POST['senderUserId'];
    $user_id = $conn->real_escape_string($_POST['user_id']);

    if ($senderUserId && $user_id) {
        $query = "SELECT * FROM message 
                  WHERE sender_id = '$senderUserId' AND reciever_id = '$user_id' 
                  ORDER BY id ASC";
        $result = $conn->query($query);

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $response[] = $row;
            }
        } else {
            $response = ["message" => "No messages found."];
        }
    } else {
        $response = ["error" => "Missing senderUserId or user_id"];
    }
} else {
    $response = ["error" => "Invalid request method"];
}

echo json_encode($response);