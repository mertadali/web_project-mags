<?php



/* Bağlantı Kontrolu */

try {

    //$conn = new PDO("mysql:host=localhost;dbname=e_ticaret;charset=utf8", "121620191072", "aTDb60fj690");
     $conn = new PDO("mysql:host=localhost;dbname=e_ticaret;charset=utf8", "root", "12345678");


     if ( mysqli_connect_errno() ) {
        echo "Bağlantı Başarısız. Hata :".mysqli_connect_error();
        die();
    } else {
       // echo "Bağlantı Başarılı";
    }


    
    
}catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

/* Olası Türkçe karakter sorunları için */
// Karakter setini ayarlamak için aşağıdaki komutta kullanılabilir.



$conn->query("SET CHARACTER SET utf8");

/* Bağlantıyı Sonlandırmak için */
//$conn = null;

?>

