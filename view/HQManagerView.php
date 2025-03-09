<?php
session_start();
$visible = 'none';
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
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>AIR27DX | HQ MANAGE</title>
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
        .footer_section {
            flex-shrink: 0;
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="header_section mb-5 nav-color">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button class="openbtn" onclick="openNav()"><img src="../view/images/menu.png" alt=""></button>
                    <a class="navbar-brand mx-auto d-flex justify-content-center" href="../index.php">
                        <img src="../view/images/LetrasAIR-top.png" class="logo">
                    </a>
                </div>
            </nav>
        </div>
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
        <div class="container" style="max-width: 1300px;">
            <label for="">ACTIVE</label>
            <button class="bg-transparent" id="toggle"><img src="../view/images/toggle-on.png" alt=""></button>
            <label for="">INACTIVE</label>
            <div class="table-responsive">
                <table class="HQ-table w-100" id="table-visible">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Reason</th>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Request</th>
                            <th>Date Time</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($hqTable as $contacto): ?>
                        <tr>
                            <td><?php echo $contacto['id']; ?></td>
                            <td>
                                <h3 class="news-text text-nowrap"><?php echo $contacto['reason']; ?></h3>
                            </td>
                            <td>
                                <h3 class="news-text text-nowrap"><?php echo $contacto['namee']; ?></h3>
                            </td>
                            <td>
                                <h3 class="news-text text-nowrap"><?php echo $contacto['surname']; ?></h3>
                            </td>
                            <td>
                                <p class="news-text text-nowrap"><?php echo $contacto['email']; ?></p>
                            </td>
                            <td>
                                <p class="news-text text-nowrap"><?php echo $contacto['p_number']; ?></p>
                            </td>
                            <td>
                                <p class="news-text text-nowrap"><?php echo $contacto['content']; ?></p>
                            </td>
                            <td>
                                <p class="news-date-table text-nowrap"><?php echo $contacto['DATE']; ?></p>
                            </td>
                            <td>
                                <form method="POST">
                                    <input type="hidden" name="contact_id" value="<?php echo $contacto['id']; ?>">
                                    <button type="submit" class="bg-transparent" name="clear-hq"><img src="../view/images/hide.png"></button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <table class="HQ-table w-100 hidden" id="table-hidden">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Reason</th>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Request</th>
                            <th>Date Time</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($hqTableBaja as $contactoB): ?>
                        <tr>
                            <td><?php echo $contactoB['id']; ?></td>
                            <td>
                                <h3 class="news-text text-nowrap"><?php echo $contactoB['reason']; ?></h3>
                            </td>
                            <td>
                                <h3 class="news-text text-nowrap"><?php echo $contactoB['namee']; ?></h3>
                            </td>
                            <td>
                                <h3 class="news-text text-nowrap"><?php echo $contactoB['surname']; ?></h3>
                            </td>
                            <td>
                                <p class="news-text text-nowrap"><?php echo $contactoB['email']; ?></p>
                            </td>
                            <td>
                                <p class="news-text text-nowrap"><?php echo $contactoB['p_number']; ?></p>
                            </td>
                            <td>
                                <p class="news-text text-nowrap"><?php echo $contactoB['content']; ?></p>
                            </td>
                            <td>
                                <p class="news-date-table text-nowrap"><?php echo $contactoB['DATE']; ?></p>
                            </td>
                            <td>
                                <form method="POST">
                                    <input type="hidden" name="contact_id_active" value="<?php echo $contactoB['id']; ?>">
                                    <button type="submit" class="bg-transparent" name="active-hq"><img src="../view/images/visible.png"></button>
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
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">Copyright 2024 All Right Reserved By Codefy</p>
        </div>
    </div>
    <script src="../view/js/jquery.min.js"></script>
    <script src="../view/js/popper.min.js"></script>
    <script src="../view/js/bootstrap.bundle.min.js"></script>
    <script src="../view/js/navbar.js"></script>
    <script src="../view/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../view/js/custom.js"></script>
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
