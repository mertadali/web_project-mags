
<?php

$conn = new PDO("mysql:host=localhost;dbname=e_ticaret;charset=utf8", "root", "12345678");

if ($_POST) {
    $ad = $_POST['ad'];
    $soyad = $_POST['mail'];
    $mesaj = $_POST['mesaj'];

    // SQL sorgusunu hazırla
    $sql = "INSERT INTO iletisim(ad, mail, mesaj) VALUES (:ad, :mail, :mesaj)";
    
    // Sorguyu hazırla
    $stmt = $conn->prepare($sql);
    
    // Parametreleri bağla
    $stmt->bindParam(':ad', $ad);
    $stmt->bindParam(':mail', $soyad);
    $stmt->bindParam(':mesaj', $mesaj);

    // Sorguyu çalıştır
    if ($stmt->execute()) {
        // Başarıyla eklendiğine dair mesaj gönder
        header("Location: contact.php?success=true");
        echo "Başarıyla kaydedildi!";
        exit; // Kodun devamını çalıştırmamak için exit kullanıyoruz.
    } else {
        // Ekleme başarısız ise hata mesajı göster
        echo "Veritabanına ekleme yapılırken bir hata oluştu: " . $stmt->errorInfo()[2];
    }
}

?>
