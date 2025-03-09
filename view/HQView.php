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
      <title>AIR27DX | HQ</title>
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
   </head>
   <body>
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
      <!-- header section end --> 
      <!-- banner section start --> 

      <div class="container d-flex justify-content-center align-items-center p-2 mb-5">
         
    <form method="POST" class="col-md-6">
      <div class="d-flex justify-content-center w-100 mb-3">
      <h1 class="text-white">HQ</h1>
      </div>
      <div>
        <div class="mb-3">
            <label for="reason" class="form-label">Reason:</label>
            <textarea id="reason" name="reason" class="form-control" maxlength="500" required></textarea>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">First Name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name:</label>
            <input type="text" id="lastname" name="lastname" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number:</label>
            <input type="tel" id="phone" name="phone" class="form-control" required>
        </div>
        <div class="mb-4">
            <label for="message" class="form-label">Request:</label>
            <textarea id="message" name="message" class="form-control" maxlength="500" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="send-hq">Submit</button>
      </div>
         
    </form>
</div>

      <!-- banner section end --> 
      <!-- footer section start -->
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
