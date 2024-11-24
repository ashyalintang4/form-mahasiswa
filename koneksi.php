<?php
$servername = "localhost";
$username = "root";
$password = "your_password"; // Ganti dengan kata sandi Anda
$dbname = "your_database"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
echo "Koneksi berhasil";
?>