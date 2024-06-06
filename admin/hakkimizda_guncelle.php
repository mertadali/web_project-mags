<?php
session_start();

// Kullanıcı girişi kontrolü
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit();
}

// Veritabanı bağlantısı
include 'db.php';

$response = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hakkimizda_yazi = $conn->real_escape_string($_POST['hakkimizda_yazi']);

    // Güncelleme sorgusu
    $sql = "UPDATE hakkimizda SET hakkimizda_yazi='$hakkimizda_yazi'";

    if ($conn->query($sql) === TRUE) {
        $response['status'] = "success";
        $response['message'] = "Hakkımızda yazısı başarıyla güncellendi.";
    } else {
        $response['status'] = "error";
        $response['message'] = "Hata: " . $conn->error;
    }

    $conn->close();
}

echo json_encode($response);
?>
