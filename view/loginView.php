<?php

if (isset($_SESSION['role'])) {
   if ($_SESSION['role'] == 1) {

   session_destroy();
}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../view/css/bootstrap.min.css">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="../view/css/style.css">
        <!-- Responsive-->
        <link rel="stylesheet" href="../view/css/responsive.css">
        <!-- fevicon -->
        <link rel="icon" href="../view/images/logo.png" type="image/gif" />
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="../view/css/jquery.mCustomScrollbar.min.css">
        <!-- Tweaks for older IEs-->
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/view/css/font-awesome.css">
        <!-- owl stylesheets --> 
        <link rel="stylesheet" href="../view/css/owl.carousel.min.css">
        <link rel="stylesoeet" href="../view/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
        <title>AIR27DX | LOGIN</title>
</head>
<body>
    
   <div style="min-height: 100vh; overflow:auto;" class="d-flex flex-column justify-content-center">
      <div class="container d-flex justify-content-center mb-5">
         <a class="logo-login" href="../index.php"><img src="../view/images/LetrasAIR-top.png"></a>
      </div>
      <div class="container d-flex justify-content-center align-items-center flex-column">
         <div class="login-container">
            <h2>Login</h2>
            <form class="login-form" method="POST">
                  <div class="container w-100 d-flex flex-column">
                     <label for="email" class="login-label">Email</label>
                     <input type="email" name="email-login" id="email" class="login-input" required/>
                  </div>
                  <div class="container w-100 d-flex flex-column">
                     <label for="password" class="login-label">Password</label>
                     <input type="password" id="password" name="pass-login" class="login-input" required/>
                  </div>
                  <div class="container w-100 d-flex flex-column align-items-center">
                     <button type="submit" name="login-btn" class="login-button mb-4 mt-3 font-weight-normal">Login</button>
                     <button type="submit" class="login-button font-weight-normal" onclick="window.location.href='../index.php'">Continue as a Guest</button>
                  </div>
                  
            </form>
         </div>
         
      </div>

   </div>

        
</body>
</html>