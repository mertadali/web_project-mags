<?php
session_start();
include('connection.php'); 
include('add_admin.php');


try {
    $conn = new PDO("mysql:host=localhost;dbname=e_ticaret;charset=utf8", "root", "12345678");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query("SET CHARACTER SET utf8");

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $kullanici_adi = $_POST['admin_isim'];
        $sifre = $_POST['admin_sifre'];

        // Kullanıcı bilgilerini veritabanından çekme
        $stmt = $conn->prepare("SELECT * FROM admins WHERE admin_isim = :admin_isim");
        $stmt->bindParam(':admin_isim', $kullanici_adi);
        $stmt->execute();

        $kullanici = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($kullanici) {
            if (password_verify($sifre, $kullanici['admin_sifre'])) {
                // Kimlik doğrulama başarılı olduğunda
                $_SESSION['loggedin'] = true;
                header('Location: admin_dashboard.php');
                exit();
            } else {
                // Şifre hatalı
                header('Location: login.php?hata=1');
                exit();
            }
        } else {
            // Kullanıcı bulunamadı
            header('Location: login.php?hata=1');
            exit();
        }
    } else {
        // Geçersiz istek yöntemi
        header('Location: login.php');
        exit();
    }

} catch (PDOException $e) {
    echo 'Bağlantı hatası: ' . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yönetici Paneli</title>
</head>
<body>
    <a href="logout.php">Çıkış Yap</a>
</body>
</html>
