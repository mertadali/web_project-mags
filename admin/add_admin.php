<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=e_ticaret;charset=utf8", "root", "12345678");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Eklemek istediğiniz kullanıcı bilgileri
    $admin_isim = "Mine"; // Kullanıcı adı
    $admin_sifre = "Mine123!"; // Şifre




     // Kullanıcı adı var mı kontrol et
     $stmt = $conn->prepare("SELECT * FROM admins WHERE admin_isim = :admin_isim");
     $stmt->bindParam(':admin_isim', $admin_isim);
     $stmt->execute();
 
     if ($stmt->rowCount() > 0) {
         echo "Kullanıcı adı zaten mevcut.";
     } else {

    // Şifreyi hashlemek için password_hash fonksiyonunu kullanalım
    $hashed_password = password_hash($admin_sifre, PASSWORD_DEFAULT);

    // Kullanıcıyı veritabanına ekleme işlemi
    $stmt = $conn->prepare("INSERT INTO admins (admin_isim, admin_sifre) VALUES (:admin_isim, :admin_sifre)");
    $stmt->bindParam(':admin_isim', $admin_isim);
    $stmt->bindParam(':admin_sifre', $hashed_password);
    $stmt->execute();

    echo "Kullanıcı başarıyla eklendi.";
     }
} catch (PDOException $e) {
    echo 'Bağlantı hatası: ' . $e->getMessage();
}
?>
