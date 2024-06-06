<!DOCTYPE html>
<html>
<head>
    <title>Ürün Ekle</title>
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
    <h2>Ürün Ekle</h2>
    <?php
    // Veritabanı bağlantısı
    $servername = "localhost";
    $username = "root";
    $password = "12345678";
    $dbname = "e_ticaret";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Bağlantı hatası: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $kategori_id = $_POST['kategori_id'];
        $urun_ad = $_POST['urun_ad'];
        $urun_aciklama = $_POST['urun_aciklama'];
        $urun_fiyat = $_POST['urun_fiyat'];

        // Resim dosyasını kontrol etme ve yükleme
        if (isset($_FILES['urun_resim']) && $_FILES['urun_resim']['error'] == 0) {
            $allowed_types = array('jpg', 'jpeg', 'png', 'gif');
            $file_name = $_FILES['urun_resim']['name'];
            $file_size = $_FILES['urun_resim']['size'];
            $file_tmp = $_FILES['urun_resim']['tmp_name'];
            $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

            if (in_array($file_ext, $allowed_types)) {
                if ($file_size <= 5000000) { // Dosya boyutu 5MB'ı geçmemesi için yapıyoruz.   strtolower -> tüm karakterleri küçük harfe çevirir.
                    $urun_resim = file_get_contents($file_tmp);

                    // Veritabanına ekleme sorgusu ekleyelim.
                    $stmt = $conn->prepare("INSERT INTO urunler (kategori_id, urun_ad, urun_resim, urun_aciklama, urun_fiyat) VALUES (?, ?, ?, ?, ?)");
                    $stmt->bind_param("isssd", $kategori_id, $urun_ad, $urun_resim, $urun_aciklama, $urun_fiyat);

                    if ($stmt->execute()) {
                        echo "Ürün başarıyla eklendi!";
                    } else {
                        echo "Hata: " . $stmt->error;
                    }

                    $stmt->close();
                } else {
                    echo "Dosya boyutu çok büyük!";
                }
            } else {
                echo "Sadece JPG, JPEG, PNG ve GIF dosyaları yüklenebilir.";
            }
        } else {
            switch ($_FILES['urun_resim']['error']) {
                case UPLOAD_ERR_INI_SIZE:
                case UPLOAD_ERR_FORM_SIZE:
                    echo "Dosya boyutu çok büyük!";
                    break;
               
                case UPLOAD_ERR_NO_FILE:
                    echo "Dosya yüklenmedi.";
                    break;
                case UPLOAD_ERR_NO_TMP_DIR:
                    echo "Geçici klasör eksik.";
                    break;
               
                case UPLOAD_ERR_EXTENSION:
                    echo "Dosya yükleme uzantısı durduruldu.";
                    break;
                default:
                    echo "Bilinmeyen bir hata oluştu.";
                    break;
            }
        }
    }

    $conn->close();
    ?>

    <form action="" method="post" enctype="multipart/form-data">
        <label for="kategori_id">Kategori ID:</label><br>
        <input type="text" id="kategori_id" name="kategori_id" required><br><br>

        <label for="urun_ad">Ürün Adı:</label><br>
        <input type="text" id="urun_ad" name="urun_ad" required><br><br>

        <label for="urun_resim">Ürün Resmi:</label><br>
        <input type="file" id="urun_resim" name="urun_resim" required><br><br>

        <label for="urun_aciklama">Ürün Açıklaması:</label><br>
        <textarea id="urun_aciklama" name="urun_aciklama" required></textarea><br><br>

        <label for="urun_fiyat">Ürün Fiyatı:</label><br>
        <input type="text" id="urun_fiyat" name="urun_fiyat" required><br><br>

        <input type="submit" value="Ürün Ekle">
    </form>
</body>
</html>