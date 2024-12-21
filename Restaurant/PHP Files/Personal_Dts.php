<?php
// Personal_Dts.php

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
$password = $_POST['password'];
$address = $_POST['address'];
$state = $_POST['state'];
$city = $_POST['city'];
$zipcode = $_POST['zipcode'];
$contact = $_POST['contact'];

// Insert data into the database
$sql = "INSERT INTO personalDts (emailid, password, address, state, city, zipcode, contact)
VALUES ('$email', '$password', '$address', '$state', '$city', $zipcode, $contact)";

if ($conn->query($sql) === TRUE) {
    echo "Data saved successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
