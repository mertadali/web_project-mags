<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $urun_id = $_POST['urun_id'];

    // Ürünü silme sorgusu
    $stmt = $conn->prepare("DELETE FROM urunler WHERE urun_id = ?");
    $stmt->bind_param("i", $urun_id);

    if ($stmt->execute()) {
        echo "Ürün başarıyla silindi!";
    } else {
        echo "Hata: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();

// Ürün listesini yeniden yükle
header("Location: admin_dashboard.php");
exit();
?>