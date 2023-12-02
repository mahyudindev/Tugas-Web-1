<?php
// Database configuration
$host = 'localhost';
$user = 'id21361770_ydtm';
$pass = 'Muhammad$02';
$database = 'id21361770_ydtm';

// Get data from the client
$cardName = $_GET['name'];
$cardPath = $_GET['path'];

// Create connection
$conn = new mysqli($host, $user, $pass, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert new card data into the database
$sql = "INSERT INTO cards (name, path) VALUES ('$cardName', '$cardPath')";
$result = $conn->query($sql);

// Send a response (you can customize this based on your needs)
header('Content-Type: application/json');

if ($result) {
    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['status' => 'error', 'message' => $conn->error]);
}

// Close connection
$conn->close();
?>
