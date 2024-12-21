<?php
// save_feedback.php

$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "weeat";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get POST data
$email = $_POST['email'];
$feedback = $_POST['feedback'];

// Insert data into the database
$sql = "INSERT INTO feedback (email, feedback) VALUES ('$email', '$feedback')";

if ($conn->query($sql) === TRUE) {
    echo "Feedback saved successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
