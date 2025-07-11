<?php
// Setup script to create comments table
// Run this file once to set up the comments table

require_once 'profile/db_connection.php';
global $conn;

echo "Setting up comments table...\n";

// Create comments table
$sql = "CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `comment_text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`comment_id`),
  KEY `user_id` (`user_id`),
  KEY `question_id` (`question_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

if ($conn->query($sql) === TRUE) {
    echo "Comments table created successfully!\n";
} else {
    echo "Error creating table: " . $conn->error . "\n";
}

// Check if login table has user_id column
$check_sql = "SHOW COLUMNS FROM login LIKE 'user_id'";
$result = $conn->query($check_sql);

if ($result->num_rows == 0) {
    echo "Adding user_id column to login table...\n";
    $alter_sql = "ALTER TABLE login ADD COLUMN user_id INT AUTO_INCREMENT PRIMARY KEY FIRST";
    if ($conn->query($alter_sql) === TRUE) {
        echo "user_id column added successfully!\n";
    } else {
        echo "Error adding user_id column: " . $conn->error . "\n";
    }
}

// Check if login table has username column
$check_username_sql = "SHOW COLUMNS FROM login LIKE 'username'";
$username_result = $conn->query($check_username_sql);

if ($username_result->num_rows == 0) {
    echo "Adding username column to login table...\n";
    $alter_username_sql = "ALTER TABLE login ADD COLUMN username VARCHAR(255) AFTER user_id";
    if ($conn->query($alter_username_sql) === TRUE) {
        echo "username column added successfully!\n";
    } else {
        echo "Error adding username column: " . $conn->error . "\n";
    }
}

// Check if login table has profession column
$check_profession_sql = "SHOW COLUMNS FROM login LIKE 'profession'";
$profession_result = $conn->query($check_profession_sql);

if ($profession_result->num_rows == 0) {
    echo "Adding profession column to login table...\n";
    $alter_profession_sql = "ALTER TABLE login ADD COLUMN profession VARCHAR(255) AFTER username";
    if ($conn->query($alter_profession_sql) === TRUE) {
        echo "username column added successfully!\n";
    } else {
        echo "Error adding profession column: " . $conn->error . "\n";
    }
}

// Check if login table has profile_pic column
$check_profile_sql = "SHOW COLUMNS FROM login LIKE 'profile_pic'";
$profile_result = $conn->query($check_profile_sql);

if ($profile_result->num_rows == 0) {
    echo "Adding profile_pic column to login table...\n";
    $alter_profile_sql = "ALTER TABLE login ADD COLUMN profile_pic VARCHAR(255) AFTER profession";
    if ($conn->query($alter_profile_sql) === TRUE) {
        echo "profile_pic column added successfully!\n";
    } else {
        echo "Error adding profile_pic column: " . $conn->error . "\n";
    }
}

echo "Setup complete!\n";
$conn->close();
?> 