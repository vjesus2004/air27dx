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
    <!-- Meta tags and other head content remain unchanged -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AIR27DX | NEWS UPLOADER</title>
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
        .content-cell {
            max-width: 200px; /* Ajusta el ancho según tus necesidades */
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
    </style>
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

    <div class="container-fluid d-flex flex-row nmc">
        <div class="p-5 nmc-1" style="width: 35%;">
            <div class="container d-flex flex-column align-items-center">
                <div class="form_news">
                    <div class="txt_manager">
                        <h1>NEWS MANAGER</h1>
                    </div>

                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" id="title" name="title" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="content">Content:</label>
                            <textarea id="content" name="content" style="height: 280px;" class="form-control"></textarea>
                        </div>

                        <div class="form-group d-flex flex-column">
                            <label for="categoria">Category:</label>
                            <select name="categoria">
                                <option value="New Members">New Members</option>
                                <option value="Awards">Awards</option>
                                <option value="Contest">Contest</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="image">Image (1600x1044)</label>
                            <input type="file" id="image" name="imagen_noticia" class="form-control-file">
                        </div>

                        <button type="submit" name="save_new" class="btn btn-primary">Subir Noticia</button>
                    </form>              
                </div>
            </div>
        </div>

        <div class="p-5 nmc-2" style="width: 65%;">
            <label for="">VISIBLE</label>
            <button class="bg-transparent" id="toggle"><img src="../view/images/toggle-on.png" alt=""></button>
            <label for="">HIDDEN</label>
            <div class="d-flex" style="max-height: 700px; overflow: auto;">
                <table id="table-visible" class="news-table overflow-auto">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Imagen</th>
                            <th>Título</th>
                            <th>Categoría</th>
                            <th>Contenido</th>
                            <th>Fecha</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($noti as $noticia): ?>
                            <tr>
                                <td><?php echo $noticia['id']; ?></td>
                                <td class="w-25">
                                    <img src="<?php echo $noticia['imagen']; ?>" alt="News Image" class="news-image w-50">
                                </td>
                                <td>
                                    <h2 class="news-title"><?php echo $noticia['title']; ?></h2>
                                </td>
                                <td class="td-category">
                                    <p class="news-text"><?php echo $noticia['categoria']; ?></p>
                                </td>
                                <td class="content-cell">
                                    <p class="news-text"><?php echo $noticia['content']; ?></p>
                                </td>
                                <td>
                                    <p class="news-date-table"><?php echo $noticia['fecha']; ?></p>
                                </td>
                                <td>
                                    <form method="POST">
                                        <input type="hidden" name="new_id" value="<?php echo $noticia['id']; ?>">
                                        <button type="submit" name="hide-new" class="bg-transparent"><img src="../view/images/hide.png"></button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <table id="table-hidden" class="news-table hidden">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Imagen</th>
                            <th>Título</th>
                            <th>Categoría</th>
                            <th>Contenido</th>
                            <th>Fecha</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($notiBaja as $noticiaB): ?>
                            <tr>
                                <td><?php echo $noticiaB['id']; ?></td>
                                <td class="w-25">
                                    <img src="<?php echo $noticiaB['imagen']; ?>" alt="News Image" class="news-image w-50">
                                </td>
                                <td>
                                    <h2 class="news-title"><?php echo $noticiaB['title']; ?></h2>
                                </td>
                                <td class="td-category">
                                    <p class="news-text"><?php echo $noticiaB['categoria']; ?></p>
                                </td>
                                <td class="content-cell">
                                    <p class="news-text"><?php echo $noticiaB['content']; ?></p>
                                </td>
                                <td>
                                    <p class="news-date-table"><?php echo $noticiaB['fecha']; ?></p>
                                </td>
                                <td>
                                    <form method="POST">
                                        <input type="hidden" name="newB_id" value="<?php echo $noticiaB['id']; ?>">
                                        <button type="submit" name="show-new" class="bg-transparent"><img src="../view/images/visible.png"></button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
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

    <script>
        document.getElementById('toggle').addEventListener('click', function() {
            var img = this.querySelector('img');
            var tableVisible = document.getElementById('table-visible');
            var tableHidden = document.getElementById('table-hidden');
            
            if (img.src.includes('toggle-off.png')) {
                img.src = '../view/images/toggle-on.png';
                tableVisible.classList.remove('hidden');
                tableHidden.classList.add('hidden');
            } else {
                img.src = '../view/images/toggle-off.png';
                tableVisible.classList.add('hidden');
                tableHidden.classList.remove('hidden');
            }
        });
    </script>
</body>
</html>
