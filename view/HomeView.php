<?php
session_start();
$visible = 'none'; // valor por defecto
$inorout = 'Login';

if (isset($_SESSION['role'])) {
   if ($_SESSION['role'] == 1) {

    $visible = 'block';
    $inorout = 'Logout';
}
}

?>
<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>AIR27DX | HOME</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="view/css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="view/css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="view/css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="view/images/logo.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="view/css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- owl stylesheets --> 
   <link rel="stylesheet" href="view/css/owl.carousel.min.css">
   <link rel="stylesheet" href="view/css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <!-- Custom CSS for Dropdown -->
</head>
   <body>
   <div class="header_section mb-5 nav-color">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <!-- Botón del menú -->
          <button class="openbtn" onclick="openNav()"><img src="view/images/menu.png" alt=""></button>

          <!-- Logo en el centro -->
          <a class="navbar-brand mx-auto d-flex justify-content-center" href="index.php">
            <img src="view/images/LetrasAIR-top.png" class="logo">
          </a>
        </div>
      </nav>
   </div>

    <!-- Barra lateral -->
    <div id="mySidebar" class="sidebar">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
      <a href="index.php">Home</a>
      <a href="controller/NoticiasController.php">News</a>
      <a href="controller/HQController.php">HQ</a>
      <a href="https://airdx.eu/">Activations</a>
      <button class="dropdown-btn unstyled-button" style="display: <?php echo $visible; ?>">Manage 
         <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container">
         <a href="controller/NoticiasManagerController.php" class="links-manager">News Uploader</a>
         <a href="controller/HQManagerController.php" class="links-manager">HQ Manage</a>
      </div>
      <a href="controller/LoginController.php"><?php echo $inorout; ?></a>
   </div>

      <div class="container d-flex flex-row mb-5">
         <div class="contenido-home w-75">
            <div class="container d-flex flex-column align-items-center">
               <img src="view/images/Banner_1.jpeg" alt="American India Radio" class="logotipo_air mb-5">
            </div>
               <div class="container d-flex flex-column container-carousel">
                  <div id="my_slider" class="d-flex slide carousel" data-ride="carousel">
                     <div class="btn-carousel d-flex align-items-center justify-content-center">
                        <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                           <span class="sr-only">Previous</span>
                        </a>
                     </div>
                     <div class="carousel-inner ml-3 mr-3">
                        <div class="carousel-item active">
                           <div class="image_main">
                              <div class="container">
                                 <img src="view/images/cards/card-1.jpeg" class="image_1">
                              </div>
                           </div>
                        </div>
                        <!-- Add more carousel items here -->
                        <div class="carousel-item">
                           <div class="image_main">
                              <div class="container">
                                 <img src="view/images/cards/card-2.jpeg" class="image_1">
                              </div>
                           </div>
                        </div>
                        <!-- Add more carousel items here -->
                        <div class="carousel-item">
                           <div class="image_main">
                              <div class="container">
                                 <img src="view/images/cards/card-3.jpeg" class="image_1">
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="image_main">
                              <div class="container">
                                 <img src="view/images/cards/card-4.jpeg" class="image_1">
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="image_main">
                              <div class="container">
                                 <img src="view/images/cards/card-5.jpeg" class="image_1">
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="image_main">
                              <div class="container">
                                 <img src="view/images/cards/card-6.jpeg" class="image_1">
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="image_main">
                              <div class="container">
                                 <img src="view/images/cards/card-7.jpeg" class="image_1">
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="image_main">
                              <div class="container">
                                 <img src="view/images/cards/card-9.jpeg" class="image_1">
                              </div>
                           </div>
                        </div>
                        <!-- Continue adding more carousel items as needed -->
                     </div>
                     <div class="btn-carousel d-flex align-items-center justify-content-center">
                        <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                           <span class="carousel-control-next-icon" aria-hidden="true"></span>
                           <span class="sr-only">Next</span>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="container d-flex flex-column align-items-center">
                  <div class="txt_home">
                     <div class="txt_home_h1">
                        <h1>Who we are?</h1>
                     </div>
                     <div>
                        <p>We are an association of friends of 
                           dx with a long history in radio, we are driven by love and. Passion for dx, meet and make 
                           friends around the world, do not hesitate to contact our HQ if you want to join us, we will provide
                           you with your personal QSL and eqsl design, if you want to participate,
                           contact someone from HQ. will provide all the information, greetings and enjoy!!
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         <div class="panel-derecho w-25">
            <div class="mb-4">
               <ul class="d-flex align-items-center flex-column">
                  <li><a href="mailto:hq@airdx.eu">hq@airdx.eu</a></li>
                  <li><a href="mailto:hq@airdx.eu"><img src="view/images/mail-icon.png"></a></li>
               </ul>
            </div>
            <div class="mb-2">
               <a href="https://www.facebook.com/people/American-India-Radio-DX/61559366470008/?mibextid=rS40aB7S9Ucbxw6v"><img src="view/images/fb.png"></a>
            </div>
            <div class="mb-2">
               <a href="https://11dx.net/" class="w-50 dx11"><img src="view/images/11dx.png"></a>
            </div>
            <div class="mb-4">
               <a href="https://www.clusterdx.nl/login.php" class="w-75 clusterdx"><img src="view/images/clusterdx.png"></a>
            </div>
            <div class="mb-3 solar-panel">
               <a title="Click to add Solar-Terrestrial Data to your website!" href="https://www.hamqsl.com/solar.html"><img src="https://www.hamqsl.com/solar100sc.php"></a>
            </div>
         </div>
      </div>
      <!-- banner section start --> 
      
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_menu">
               <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="controller/NoticiasController.php">News</a></li>
                  <li><a href="controller/HQController.php">HQ</a></li>
                  <li><a href="https://airdx.eu/">Activations</a></li>
               </ul>
            </div>
            <div class="contact_menu">
               <ul>
                  <li><a href="mailto:hq@airdx.eu"><img src="view/images/mail-icon.png"></a></li>
                  <li><a href="mailto:hq@airdx.eu">hq@airdx.eu</a></li>
               </ul>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">Copyright 2024 All Right Reserved By Codefy</p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="view/js/jquery.min.js"></script>
      <script src="view/js/popper.min.js"></script>
      <script src="view/js/bootstrap.bundle.min.js"></script>
      <script src="view/js/navbar.js"></script>
      <!-- sidebar -->
      <script src="view/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="view/js/custom.js"></script>
      <!-- javascript --> 
      <script src="view/js/owl.carousel.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <!-- Initialize Bootstrap Carousel -->
      <script>
         $(document).ready(function() {
            $('#my_slider').carousel({
               interval: 2000 // Cambia este valor para ajustar la velocidad del carrusel
            });
         });
      </script>
   </body>
</html>
