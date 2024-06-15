<?php
include('connection.php');
try{
    $stmnt = $conn->query("select urun_id, kategori_id, urun_ad, urun_resim, urun_fiyat from urunler", PDO::FETCH_ASSOC);
    $urunler = $stmnt->fetchAll(PDO::FETCH_ASSOC);

}catch(PDOEXCEPTION $e){
echo "mesaj: ".$e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title> MAGS ACCESSORİES En iyi bileklik Modelleri </title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

 <script>
        function sınırla() {
            var erkek1. = document.getElementById("18");
            if (erkek1.width > 300) {
                erkek1.width = 300; // Maksimum genişlik
            }
            if (erkek1.height > 200) {
                erkek1.height = 200; // Maksimum yükseklik
            }
        }
    </script>



    </head>
    
    <body>

        <img id="18" src="erkek1.jpg" alt="Açıklama" onload="sınırla()">

           
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">
                            <img src="assets/images/LOGO2Yeni.png" style="width:204px;height:130px;">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Anasayfa</a></li>
                            <li class="scroll-to-section"><a href="#men">Erkek</a></li>
                            <li class="scroll-to-section"><a href="#women">Kadın</a></li>
                            <li class="scroll-to-section"><a href="#kids">Sevgili</a></li>
                             <li class="scroll-to-section"><a href="rapor.php">Rapor</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Sayfalar</a>
                                <ul>
                                    <li><a href="about.php">Hakkımızda</a></li>
                                    <li><a href="products.php">Ürünler</a></li>
                                   
                                    <li><a href="contact.php">İletişim</a></li>
                                </ul>
                            </li>
                           
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4>EN TREND BİLEKLİK MODELLERİ İÇİN</h4>
                                <span>MAGS ACCESSORİES &amp; </span>
                                <div class="main-border-button">
                                    <a href="products.php">Ürünleri İncele</a>
                                </div>
                            </div>
                            <img src="assets/images/left-banner-image.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Kadın</h4>
                                            <span>Kadınlar için en iyi aksesuarlar</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Women</h4>
                                                <p>Tarzınıza şıklık katacak ürünler</p>
                                                <div class="main-border-button">
                                                    <a href="#women">Daha fazlası</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/baner-right-image-01.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Erkek</h4>
                                            <span>Erkekler için en iyi aksesuarlar</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Men</h4>
                                                <p>Tarzınıza şıklık katacak ürünler</p>
                                                <div class="main-border-button">
                                                    <a href="#men">Daha fazlası</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/baner-right-image-02.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Sevgili</h4>
                                            <span>Çiftler için en iyi aksesuarlar</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Couples</h4>
                                                <p>Aşkınıza tatlılık katacak ürünler.</p>
                                                <div class="main-border-button">
                                                    <a href="#kids">Daha fazlası</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/sevgili.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Aksesuarlar</h4>
                                            <span>En trend aksesuarlar</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Accessories</h4>
                                               
                                            </div>
                                        </div>
                                        <img src="assets/images/baner-right-image-04.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Men Area Starts ***** -->
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">

                        <h2>Erkek Modelleri</h2>
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                            <?php 
                            $urunlerErkek = [];
                            foreach ($urunler as $urun) {
                                if($urun[kategori_id] == 1){
                                    array_push($urunlerErkek, $urun);
                                }
                            }
                            foreach($urunlerErkek as $urunErkek){
                            ?>
                                <div class="item">
                                    <div class="thumb">
                                        <div class="hover-content">
                                            <ul>      
                                                <li><a href="single-product.php?id=<?php echo $urunErkek[urun_id] ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                               
                                               
                                            </ul>
                                        </div>
                                        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($urunErkek['urun_resim']); ?>" />
                                    </div>
                                    <div class="down-content">


                                   
                                        <h4> <?php echo $urunErkek[urun_ad] ?> </h4>
                                        <span>$<?php echo $urunErkek[urun_fiyat] ?>
                                    </span>

                                    

                             
                                        
                                    </div>
                                   
                                
                                    
                                </div>
                                
                            <?php } ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Men Area Ends ***** -->

    <!-- ***** Women Area Starts ***** -->
    <section class="section" id="women">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Kadın Modelleri</h2>
                      
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="women-item-carousel">
                        <div class="owl-women-item owl-carousel">
                        <?php 
                            $urunlerKadın = [];
                            foreach ($urunler as $urun) {
                                if($urun[kategori_id] == 2){
                                    array_push($urunlerKadın, $urun);
                                }
                            }
                            foreach($urunlerKadın as $urunKadın){
                            ?>
                                <div class="item">
                                    <div class="thumb">
                                        <div class="hover-content">
                                            <ul>      
                                                <li><a href="single-product.php?id=<?php echo $urunKadın[urun_id] ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($urunKadın['urun_resim']); ?>" />
                                    </div>
                                    <div class="down-content">
                                        <h4> <?php echo $urunKadın[urun_ad] ?> </h4>
                                        <span>$<?php echo $urunKadın[urun_fiyat] ?></span>
                                        </ul>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Women Area Ends ***** -->

    <!-- ***** Kids Area Starts ***** -->
    <section class="section" id="kids">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Çift Modelleri</h2>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="kid-item-carousel">
                        <div class="owl-kid-item owl-carousel">
                            <?php 
                            $urunlerCocuk = [];
                            foreach ($urunler as $urun) {
                                if($urun[kategori_id] == 3){
                                    array_push($urunlerCocuk, $urun);
                                }
                            }
                            foreach($urunlerCocuk as $urunCocuk){
                            ?>
                                <div class="item">
                                    <div class="thumb">
                                        <div class="hover-content">
                                            <ul>      
                                                <li><a href="single-product.php?id=<?php echo $urunCocuk[urun_id] ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($urunCocuk['urun_resim']); ?>" />
                                    </div>
                                    <div class="down-content">
                                        <h4> <?php echo $urunCocuk[urun_ad] ?> </h4>
                                        <span>$<?php echo $urunCocuk[urun_fiyat] ?></span>
                                        </ul>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Kids Area Ends ***** -->


    <!-- ***** Social Area Starts ***** -->
    <section class="section" id="social">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Instagram</h2>
                        <span>Daha fazla ürün ve haberlerden faydalanmak için bizi takip edebilirsiniz.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row images">
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com">
                                <h6>Fashion</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="assets/images/instagram-01.jpg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com">
                                <h6>New</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="assets/images/instagram-02.jpg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com">
                                <h6>Brand</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="assets/images/instagram-03.jpg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com">
                                <h6>Makeup</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="assets/images/instagram-04.jpg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com">
                                <h6>Leather</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="assets/images/instagram-05.jpg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com">
                                <h6>Bag</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="assets/images/instagram-06.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Social Area Ends ***** -->
    <div class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-heading">
                        <h2>By Subscribing To Our Newsletter You Can Get 30% Off</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                    <form id="subscribe" action="" method="get">
                        <div class="row">
                          <div class="col-lg-5">
                            <fieldset>
                              <input name="name" type="text" id="name" placeholder="Your Name" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-5">
                            <fieldset>
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-2">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
                            </fieldset>
                          </div>
                        </div>
                    </form>
                </div>
         


   
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                       
                        <ul>
                            <li><a href="https://www.google.com/maps/place/Bostanl%C4%B1,+1783.+Sk.+29+A,+35590+Kar%C5%9F%C4%B1yaka%2F%C4%B0zmir/@38.4548021,27.1016912,17z/data=!3m1!4b1!4m6!3m5!1s0x14bbd9be15171255:0x75ede01765f81062!8m2!3d38.4547979!4d27.1042661!16s%2Fg%2F11c25dm_kx?entry=ttu" target="blank">Bostanlı, 1783. Sk. 29 A, 35590 Karşıyaka/İzmir</a></li>
                            <li><a href="mailto:mine@gmail.com">mine@gmail.com</a></li>
                            <li><a href="tel:+905412009110">+90541-200-91-10</a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-3">
                    <h4>Kategoriler</h4>
                    <ul>
                        <li><a href="#men">Erkek Aksesuarları</a></li>
                        <li><a href="#women">Kadın Aksesuarları</a></li>
                        <li><a href="#kids">Çift Aksesuarları</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Yardımcı Linkler</h4>
                    <ul>
                        <li><a href="index.php">Anasayfa</a></li>
                        <li><a href="about.php">Hakkımızda</a></li>
                        <li><a href="contact.php">İletişim</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2023 All Rights Reserved. 
                        
                        <ul>
                            <li><a href="https://www.instagram.com/codewithadali/" target="blank"> <i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://twitter.com/Merttadalii" target="blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/mert-adal%C4%B1-120726229/" target="blank"><i class="fa fa-linkedin"></i></a></li>
                        
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
     
    
  </body>
</html>