<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit();
}

// Veritabanı bağlantısı
include 'db.php';

$sql = "SELECT hakkimizda_yazi FROM hakkimizda";
$result = $conn->query($sql);
$mesaj = $result->fetch_assoc();

?>






<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yönetici Paneli</title>
    <meta name="description" content="Şirketinizin yönetici paneli, ürün ekleme ve hakkımızda sayfasını düzenleme işlevlerini içerir.">
    <meta name="keywords" content="yönetici paneli, ürün ekleme, hakkımızda düzenleme">
    <meta name="author" content="MERT ADALI">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>
        .container {
            max-width: 1300px;
            margin-top: 50px;
        }
        .btn {
            margin-top: 20px;
        }
        .logout-button {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            background-color: #fff;
            color: red;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mb-4">Yönetici Paneli</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">Ürünler</div>
                    <div class="card-body">
                        <p class="card-text">Yeni ürün ekleme işlemini gerçekleştirebilirsiniz.</p>
                        <a href="add_products.php" class="btn btn-primary"><i class="fas fa-plus"></i> Ürün Ekle</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-success text-white">Hakkımızda</div>
                    <div class="card-body">
                        <p class="card-text">Hakkımızda sayfasını düzenleyebilirsiniz.</p>
                        <form id="hakkimizdaForm">
                            <textarea id="hakkimizda_yazi" name="hakkimizda_yazi" style="width: 100%;"><?php echo $mesaj['hakkimizda_yazi']; ?></textarea>
                            <button type="submit" class="btn btn-success"><i class="fas fa-edit"></i> Güncelle</button>
                        </form>
                        <div id="responseMessage" style="margin-top: 20px;"></div>
                    </div>
                </div>
            </div>
        </div>
        <a href="logout.php" class="logout-button">Çıkış Yap</a>

        <h2>Ürün Listesi</h2>
        <?php
        $sql = "SELECT urun_id, kategori_id, urun_ad, urun_resim, urun_aciklama, urun_fiyat FROM urunler";
      
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>
                    <tr>
                        <th>Ürün ID</th>
                       
                        <th>Ürün Adı</th>
                        <th>Ürün Resmi</th>
                        <th>Ürün Açıklaması</th>
                        <th>Ürün Fiyatı</th>
                        <th>Sil</th>
                        <th>Düzenle</th>
                    </tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["urun_id"] . "</td>
                        
                        <td>" . $row["urun_ad"] . "</td>
                        <td><img src='data:image/jpeg;base64," . base64_encode($row["urun_resim"]) . "' width='100'/></td>
                        <td>" . $row["urun_aciklama"] . "</td>
                        <td>" . $row["urun_fiyat"] . "</td>
                        <td>
                            <form action='urun_sil.php' method='post' style='display:inline-block;'>
                                <input type='hidden' name='urun_id' value='" . $row["urun_id"] . "' />
                                <input type='submit' value='Sil' />
                            </form>
                        </td>
                        <td>
                            <form action='urun_duzenle.php' method='get' style='display:inline-block;'>
                                <input type='hidden' name='urun_id' value='" . $row["urun_id"] . "' />
                                <input type='submit' value='Düzenle' />
                            </form>
                        </td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "0 sonuç";
        }

        $conn->close();
        ?>

        <h2>Gelen Mesaj Listesi</h2>
        <?php
        include 'db.php';

        $sql = "SELECT id, ad, mail, mesaj, tarih FROM iletisim";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>
                    <tr>
                        <th>Adı</th>
                        <th>E-mail</th>
                        <th>Mesaj</th>
                        <th>Tarih</th>
                        <th>Durum</th>
                    </tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["ad"] . "</td>
                        <td>" . $row["mail"] . "</td>
                        <td>" . $row["mesaj"] . "</td>
                        <td>" . $row["tarih"] . "</td>
                        <td>
                            <form action='mesaj_sil.php' method='post' style='display:inline-block;'>
                                <input type='hidden' name='id' value='" . $row["id"] . "' />
                                <input type='submit' value='Okundu' />
                            </form>
                        </td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "0 sonuç";
        }

        $conn->close();
        ?>
    </div>

    <!-- jQuery ve Bootstrap JavaScript CDN'leri -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function(){     // -> sayfa yüklendiğinde çalışacak kod
            $('#hakkimizdaForm').on('submit', function(e){
                e.preventDefault();                              //  -> formun normal submit işlemini engellemek için kullandık.
                var hakkimizda_yazi = $('#hakkimizda_yazi').val();

                $.ajax({
                    url: 'hakkimizda_guncelle.php',
                    type: 'POST',
                    data: { hakkimizda_yazi: hakkimizda_yazi },
                    dataType: 'json',
                    success: function(response){
                        if (response.status === "success") {
                            $('#responseMessage').html('<div class="alert alert-success">' + response.message + '</div>');
                        } else {
                            $('#responseMessage').html('<div class="alert alert-danger">Hata: ' + response.message + '</div>');
                        }
                    },
                    error: function(){
                        $('#responseMessage').html('<div class="alert alert-danger">Bir hata oluştu.</div>');
                    }
                });
            });
        });
    </script>
</body>
</html>
