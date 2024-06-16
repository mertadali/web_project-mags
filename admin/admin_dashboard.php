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



$initialLimit = 3;



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
    .logout-button {
        position: absolute;
        top: 20px;
        right: 20px;
        padding: 10px;
        border: 1px solid #ccc;
        background-color: #fff;
        color: red;
    }

    .card {
        margin-bottom: 20px;
    }

    #hakkimizda_yazi {
        border: 1px solid #ccc;
        padding: 10px;
        min-height: 200px;
    }

    #responseMessage {
        margin-top: 20px;
    }

    .btn-frame {
        display: inline-block;
        border: 1px solid #ccc;
        padding: 10px 20px;
        border-radius: 5px;
    }

    .btn-frame svg {
        vertical-align: middle;
    }

    .btn-custom {
        margin-top: 10px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    table, th, td {
        border: 1px solid black;
    }

    th, td {
        padding: 10px;
        text-align: left;
    }

    #scrollTopButton {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 20px;
        padding: 10px 20px;
        background-color: #EB002A;
        color: white;
        cursor: pointer;
        border: none;
        border-radius: 5px;
        z-index: 99;
    }

    #scrollTopButton:hover {
        background-color: #0056b3;
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
                           <div id="hakkimizda_yazi" style="width: 100%;"><?php echo $mesaj['hakkimizda_yazi']; ?></div>
                           <button type="submit" class="btn btn-success"><i class="fas fa-edit"></i> Güncelle</button>
                        </form>

                        <div id="responseMessage" style="margin-top: 20px;"></div>
                    </div>
                </div>
            </div>
        </div>
        <a href="logout.php" class="logout-button">Çıkış Yap</a>

        <h2 class="mt-5">Ürün Listesi</h2>
        <?php


// Toplam ürün sayısını al
$sql_total = "SELECT COUNT(*) AS total FROM urunler";
$result_total = $conn->query($sql_total);
$row_total = $result_total->fetch_assoc();
$totalProducts = $row_total['total'];





        $sql = "SELECT urun_id, kategori_id, urun_ad, urun_resim, urun_aciklama, urun_fiyat FROM urunler LIMIT $initialLimit    ";
      
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo  "<table id='productTable'>
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
            // Daha fazla ürün varsa göstermek için bir buton
            echo "<div class='text-center mt-3'>
                                <button id='showMoreButton' class='btn btn-primary'>Daha Fazla Göster</button>
                                <button id='showLessButton' class='btn btn-warning'>Daha Az Göster</button>
            
                            </div>";

    }
         else {
            echo "0 sonuç";
        }

        $conn->close();
        ?>

<h2 class="mt-5">Gelen Mesaj Listesi</h2>
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


    <script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#hakkimizda_yazi'))
        .then(editor => {
            editor.setData('<?php echo addslashes($mesaj['hakkimizda_yazi']); ?>');
            editor.model.document.on('change:data', () => {
                const data = editor.getData();
                document.querySelector('#hakkimizda_yazi').textContent = data;
            });
        })
        .catch(error => {
            console.error(error);
        });
</script>




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
<button onclick="topFunction()" id="scrollTopButton" title="Sayfanın başına git" style="display: none;">
    Yukarı Çık
</button>


<script>
    // Sayfa yüklendiğinde çalışacak kod
    window.onload = function() {
        // Kullanıcı scroll yapınca tetiklenecek fonksiyon
        window.onscroll = function() {scrollFunction()};
    };

    // Kullanıcı scroll yapınca çalışacak fonksiyon
    function scrollFunction() {
        // Eğer kullanıcı 20 pikselden fazla scroll yaparsa butonu göster, aksi halde gizle
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("scrollTopButton").style.display = "block";
        } else {
            document.getElementById("scrollTopButton").style.display = "none";
        }
    }

    // Kullanıcı butona tıkladığında sayfanın başına hızlıca dönecek fonksiyon
    function topFunction() {
        document.body.scrollTop = 0; // Safari için
        document.documentElement.scrollTop = 0; // Diğer tarayıcılar için
    }
</script>




<script>
        $(document).ready(function(){
            var offset = <?php echo $initialLimit; ?>;
            var totalProducts = <?php echo $totalProducts; ?>; // Toplam ürün sayısı PHP tarafından sağlanmalı

            // İlk durumda Daha Az Göster düğmesini gizle
            $('#showLessButton').hide();

            $('#showMoreButton').click(function(e){
                e.preventDefault();
                
                $.ajax({
                    url: 'get_more_products.php',
                    method: 'GET',
                    data: { offset: offset },
                    dataType: 'html',
                    success: function(response){
                        if (response.trim() !== "") {
                            $('#productTable').append(response);
                            offset += 3;

                            // Toplam ürün sayısını kontrol ederek Daha Fazla Göster düğmesini gizle
                            if (offset >= totalProducts) {
                                $('#showMoreButton').hide();
                            }
                        } else {
                            $('#showMoreButton').remove();
                        }

                        // Daha Az Göster düğmesini göster
                        $('#showLessButton').show();
                    },
                    error: function(){
                        alert('Daha fazla ürün getirilirken bir hata oluştu.');
                    }
                });
            });

            $('#showLessButton').click(function(e){
                e.preventDefault();
                var currentRowCount = $('#productTable tr').length - 1;

                if (currentRowCount > <?php echo $initialLimit; ?>) {
                    var newLimit = currentRowCount - 3;
                    $('#productTable tr:gt(' + newLimit + ')').remove();
                    offset = newLimit;

                    // Toplam ürün sayısını kontrol ederek Daha Fazla Göster düğmesini göster
                    if (offset < totalProducts) {
                        $('#showMoreButton').show();
                    }
                } else {
                    alert('Daha az gösterilecek ürün kalmadı.');
                }

                // Daha Az Göster düğmesini gizle
                if (offset <= <?php echo $initialLimit; ?>) {
                    $('#showLessButton').hide();
                }
            });
        });
    </script>



</html>
