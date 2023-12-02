<?php

$host = 'localhost';
$user = 'id21361770_ydtm';
$pass = 'Muhammad$02';
$database = 'id21361770_ydtm';

// Membuat koneksi
$conn = new mysqli($host, $user, $pass, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Gagal terhubung ke database: " . $conn->connect_error);
} else {
    echo "Sukses terhubung ke database!";
}

// Menutup koneksi
$conn->close();

?>
