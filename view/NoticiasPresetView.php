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
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <title>AIR27DX | NEWS</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="stylesheet" type="text/css" href="../view/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../view/css/style.css">
      <link rel="stylesheet" href="../view/css/responsive.css">
      <link rel="icon" href="../view/images/logo.png" type="image/gif" />
      <link rel="stylesheet" href="../view/css/jquery.mCustomScrollbar.min.css">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/../view/css/font-awesome.css">
      <link rel="stylesheet" href="../view/css/owl.carousel.min.css">
      <link rel="stylesheet" href="../view/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

      <style>
        html, body {
            height: 100%;
        }
        body {
            display: flex;
            flex-direction: column;
            margin: 0;
        }
        .content {
            flex: 1;
        }
    </style>
   </head>
   <body>
      <div class="content">
      <div class="header_section mb-5 nav-color">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <!-- Botón del menú -->
          <button class="openbtn" onclick="openNav()"><img src="../view/images/menu.png" alt=""></button>

          <!-- Logo en el centro -->
          <a class="navbar-brand mx-auto d-flex justify-content-center" href="../index.php">
            <img src="../view/images/LetrasAIR-top.png" class="logo">
          </a>
        </div>
      </nav>
   </div>

    <!-- Barra lateral -->
    <div id="mySidebar" class="sidebar">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
      <a href="../index.php">Home</a>
      <a href="NoticiasController.php">News</a>
      <a href="HQController.php">HQ</a>
      <a href="https://airdx.eu/">Activations</a>
      <button class="dropdown-btn unstyled-button" style="display: <?php echo $visible; ?>">Manage 
         <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container">
         <a href="NoticiasManagerController.php" class="links-manager">News Uploader</a>
         <a href="HQManagerController.php" class="links-manager">HQ Manage</a>
      </div>
      <a href="LoginController.php"><?php echo $inorout; ?></a>
   </div>
   
      <div class="noticia-container">
         <div class="container d-flex flex-column align-items-center">
            <div class="row mb-2">
               <div class="col-md-12 mb-3">
                  <div class="noticia-image  d-flex justify-content-center">
                     <img src="<?php echo $imagen; ?>" class="w-75">
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12  d-flex justify-content-center">
                  <div class="noticia-title">
                     <h1><?php echo $titulo; ?></h1>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="noticia-content">
                  <p><?php echo str_replace("<br />", "<br>", $noticia['content']); ?></p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="noticia-date">
                     <p>Date: <?php echo $fecha; ?></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
   

      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_menu">
               <ul>
                  <li><a href="../index.php">Home</a></li>
                  <li><a href="NoticiasController.php">News</a></li>
                  <li><a href="HQController.php">HQ</a></li>
                  <li><a href="https://airdx.eu/">Activations</a></li>
               </ul>
            </div>
            <div class="contact_menu">
               <ul>
                  <li><a href="mailto:hq@airdx.eu"><img src="../view/images/mail-icon.png"></a></li>
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
      <script src="../view/js/jquery.min.js"></script>
      <script src="../view/js/popper.min.js"></script>
      <script src="../view/js/bootstrap.bundle.min.js"></script>
      <script src="../view/js/navbar.js"></script>
      <!-- sidebar -->
      <script src="../view/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="../view/js/custom.js"></script>
      <!-- javascript --> 
      <script src="../view/js/owl.carousel.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <!-- Initialize Bootstrap Carousel -->
   </body>
</html>
