
<?php
// Display errors for debugging (remove in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database config
$host = "localhost";  // Use 127.0.0.1 to force TCP/IP (avoids socket issues)
$username = "root";
$password = "root";
$database = "chat_system";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

//$conn->close();
?>
