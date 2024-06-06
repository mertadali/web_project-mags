<?php
// db.php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "e_ticaret";

// Veritabanına bağlantı oluşturma
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol etme
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}
?>