<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    // Ürünü silme sorgusu
    $stmt = $conn->prepare("DELETE FROM iletisim WHERE id = ?");
    $stmt->bind_param("i", $id);

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