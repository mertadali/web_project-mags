<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



    <title>Contact - MAGS ACCESSORİES</title>

    

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

   
 
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
                                    <li><a href="about.php">Hakkımızda</a></li>
                                    <li><a href="products.php">Ürünler</a></li>
                                  
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
                        <h2>İletişim</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Contact Area Starts ***** -->
    <div class="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3124.4226794530678!2d27.10169117542936!3d38.454802072698634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbd9be15171255%3A0x75ede01765f81062!2zQm9zdGFubMSxLCAxNzgzLiBTay4gMjkgQSwgMzU1OTAgS2FyxZ_EsXlha2EvxLB6bWly!5e0!3m2!1str!2str!4v1703546835368!5m2!1str!2str" width="520" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Bize ulaşmak için mesaj gönderiniz</h2>
                </div>
                
                <?php if(isset($_GET['success'])): ?>
                    <div class="alert alert-success" role="alert">   
                        Mesajınız başarıyla iletilmiştir.     
                    </div>
                 <?php endif; ?>

                <form id="contact" action="iletisim_form.php" method="post">    
                    <div class="row">
                        <div class="col-lg-6">
                            <fieldset>
                                <input name="ad" type="text" id="name" placeholder="Ad" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <input name="mail" type="email" id="email" placeholder="E-mail" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <textarea name="mesaj" rows="6" id="message" placeholder="Ulaşmak istediğiniz konu hakkında yazınız." required></textarea>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" id="form-submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
                        </div>
                        
                    </div>
  
                   
                </form>

                
            </div>
        </div>
    </div>
</div>

    <!-- ***** Contact Area Ends ***** -->

    

   
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
                            <li><a href="https://twitter.com/Merttadalii"><i class="fa fa-twitter" target="blank"></i></a></li>
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
    <script src="assets/js/alert.js"></script>
   

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
