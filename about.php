<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>About- MAGS ACCESSORİES</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
    </head>
    
    <body>
    
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
                            <li class="scroll-to-section"><a href="index.php" class="active">Anasayfa</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Sayfalar</a>
                                <ul>
                                    <li><a href="products.php">Ürünler</a></li>
                                    <li><a href="contact.php">İletişim</a></li>
                                </ul>
                            </li>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading about-page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Biz Kimiz?</h2>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-image">
                        <img src="assets/images/takım2.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <h4>Hakkımızda &amp; Yeteneklerimiz</h4>

                        <?php
include('connection.php');
try{
    $stmnt = $conn->query("SELECT hakkimizda_yazi FROM hakkimizda");
    $mesaj = $stmnt->fetch(PDO::FETCH_ASSOC);
    

}catch(PDOEXCEPTION $e){
echo "mesaj: ".$e->getMessage();
}


?>

                        <span> <?php echo $mesaj[hakkimizda_yazi] ?> </span>
                    

                       
                </div>
            </div>
        </div>
    </div>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Our Team Area Starts ***** -->
    <section class="our-team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Ekibimiz</h2>
                        <span>Enerji dolu ve yaratıcı ekibimizle gece gündüz demeden sizler için çalışıyoruz.</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-item">
                        <div class="thumb">
                            <div class="hover-effect">
                                <div class="inner-content">
                                    <ul>
                                       
                                        <li><a href="https://www.instagram.com/codewithadali/"> <i class="fa fa-instagram"></i></a></li>
                                       
                                    </ul>
                                </div>
                            </div>
                            <img src="assets/images/team-member-02.jpg">
                        </div>
                        <div class="down-content">
                            <h4>Mert Adalı</h4>
                            <span>Sales & Marketing </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-item">
                        <div class="thumb">
                            <div class="hover-effect">
                                <div class="inner-content">
                                    <ul>
                            
                                       <li><a href="https://www.instagram.com/cb360mine/"> <i class="fa fa-instagram"></i></a></li>
                                      
                                    </ul>
                                </div>
                            </div>
                            <img src="assets/images/team-member-01.jpg">
                        </div>
                        <div class="down-content">
                            <h4>Mine Gedik</h4>
                            <span>CEO & Investor</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-item">
                        <div class="thumb">
                            <div class="hover-effect">
                                <div class="inner-content">
                                    <ul>
                                        <li><a href="https://www.instagram.com/saitgedik/"> <i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <img src="assets/images/team-member-03.jpg">
                        </div>
                        <div class="down-content">
                            <h4>Sait Gedik</h4>
                            <span>Art Director</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Team Area Ends ***** -->

    <!-- ***** Services Area Starts ***** -->
    <section class="our-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Hizmetlerimiz</h2>
                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item">
                        <h4>Renk, Dokunuş</h4>
                        <p>Mags Accessories, kişisel tarzınıza renk ve dokunuş katmak için yaratılmış bir el yapımı takı markasıdır. Kalite ve özgünlük ilkesini benimseyen Mags, her bir mücevheriyle sizlere benzersiz bir deneyim sunmayı hedefler. İsim, zarafet ve zarafeti birleştirerek oluşturulmuştur; Mags, takı dünyasında öne çıkan tasarımları ile sizleri etkileyerek sıradışı bir stil deneyimine davet eder.</p>
                        <img src="assets/images/service-01.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item">
                        <h4>El Yapımı</h4>
                        <p>Mags Accessories, her bir ürününde el işçiliğine önem verir. Her bir boncuk bilezik, özenle seçilmiş malzemelerle el yapımı olarak üretilir. Renk paletimiz, doğadan ilham alınarak oluşturulmuş ve her zevke hitap etmek üzere geniş bir yelpazeyi kapsar. Böylece, Mags mücevherleri, kendi benzersiz stilinizi yansıtmanız için mükemmel bir seçenek sunar.</p>
                        <img src="assets/images/service-02.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item">
                        <h4>Tutku </h4>
                        <p>Mags Accessories, bir tutku ve yaratıcılık öyküsüdür. Her bir tasarım, kurucumuzun takı dünyasındaki derin sevgisini ve yeteneklerini yansıtır. Mags, herkesin kendi benzersiz güzelliklerini kutlamasına olan inancını taşır. Biz, müşterilerimize kendilerini ifade etmeleri ve tarzlarını özgürce yaşamaları için ilham verici takılar sunuyoruz.</p>
                        <img src="assets/images/service-03.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Services Area Ends ***** -->

   
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
                    <h4>Alışveriş &amp; Kategorileri</h4>
                    <ul>
                        <li><a href="#men">Erkek Aksesuar</a></li>
                        <li><a href="#women">Kadın Aksesuar</a></li>
                        <li><a href="#kids">Çocuk Aksesuar</a></li>
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
