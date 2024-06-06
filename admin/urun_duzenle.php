<!DOCTYPE html>
<html>
<head>
    <title>Ürün Düzenle</title>
    
</head>



<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 500px; /* Max genişlik azaltıldı */
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        margin-bottom: 20px; /* Boşluk azaltıldı */
    }

    label {
        font-weight: bold;
    }

    input[type="text"],
    input[type="file"],
    textarea {
        width: calc(100% - 32px); /* Genişlik düzenlendi */
        padding: 8px; /* Padding azaltıldı */
        margin-bottom: 15px; /* Boşluk azaltıldı */
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #4caf50;
        color: white;
        padding: 12px 16px; /* Padding azaltıldı */
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>




<body>
    <h2>Ürün Düzenle</h2>
    <?php
    include 'db.php';

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['urun_id'])) {
        $urun_id = $_GET['urun_id'];

        $sql = "SELECT urun_id, kategori_id, urun_ad, urun_resim, urun_aciklama, urun_fiyat FROM urunler WHERE urun_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $urun_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            ?>
            <form action="urun_duzenle.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="urun_id" value="<?php echo $row['urun_id']; ?>">

                <label for="kategori_id">Kategori ID:</label><br>
                <input type="text" id="kategori_id" name="kategori_id" value="<?php echo $row['kategori_id']; ?>" required><br><br>

                <label for="urun_ad">Ürün Adı:</label><br>
                <input type="text" id="urun_ad" name="urun_ad" value="<?php echo $row['urun_ad']; ?>" required><br><br>

                <label for="urun_resim">Ürün Resmi:</label><br>
                <input type="file" id="urun_resim" name="urun_resim"><br><br>
                <img src="data:image/jpeg;base64,<?php echo base64_encode($row['urun_resim']); ?>" width="100"/><br><br>

                <label for="urun_aciklama">Ürün Açıklaması:</label><br>
                <textarea id="urun_aciklama" name="urun_aciklama" required><?php echo $row['urun_aciklama']; ?></textarea><br><br>

                <label for="urun_fiyat">Ürün Fiyatı:</label><br>
                <input type="text" id="urun_fiyat" name="urun_fiyat" value="<?php echo $row['urun_fiyat']; ?>" required><br><br>

                <input type="submit" value="Güncelle">
            </form>
            <?php
        } else {
            echo "Ürün bulunamadı.";
        }

        $stmt->close();
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['urun_id'])) {
        $urun_id = $_POST['urun_id'];
        $kategori_id = $_POST['kategori_id'];
        $urun_ad = $_POST['urun_ad'];
        $urun_aciklama = $_POST['urun_aciklama'];
        $urun_fiyat = $_POST['urun_fiyat'];

        $update_sql = "UPDATE urunler SET kategori_id = ?, urun_ad = ?, urun_aciklama = ?, urun_fiyat = ? WHERE urun_id = ?";

        if ($_FILES['urun_resim']['error'] == 0) {
            $urun_resim = file_get_contents($_FILES['urun_resim']['tmp_name']);
            $update_sql = "UPDATE urunler SET kategori_id = ?, urun_ad = ?, urun_resim = ?, urun_aciklama = ?, urun_fiyat = ? WHERE urun_id = ?";
            $stmt = $conn->prepare($update_sql);
            $stmt->bind_param("isssdi", $kategori_id, $urun_ad, $urun_resim, $urun_aciklama, $urun_fiyat, $urun_id);
        } else {
            $stmt = $conn->prepare($update_sql);
            $stmt->bind_param("issdi", $kategori_id, $urun_ad, $urun_aciklama, $urun_fiyat, $urun_id);
        }

        if ($stmt->execute()) {
            header("Location: admin_dashboard.php");
            exit;
        } else {
            echo "Hata: " . $stmt->error;
        }

        $stmt->close();
    }

    $conn->close();
    ?>
</body>
</html>