<?php
// Database configuration
$host = 'localhost';
$user = 'id21361770_ydtm';
$pass = 'Muhammad$02';
$database = 'id21361770_ydtm';

// Create connection
$conn = new mysqli($host, $user, $pass, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch existing cards data from the database
$sql = "SELECT * FROM cards";
$result = $conn->query($sql);

$cardsData = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $cardsData[] = $row;
    }
}

// Set header as JSON
header('Content-Type: application/json');

// Encode data to JSON and send it to the client
echo json_encode($cardsData);

// Close connection
$conn->close();
?>
