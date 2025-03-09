<?php
require_once("../model/NoticiasModel.php");

$noticias = new NoticiasModel();
$noti = $noticias->GetNoticias();
$notiBaja = $noticias->GetNoticiasBaja();
require_once("../view/NoticiasManagerView.php");

if (isset($_POST['save_new'])) {
    $titulo = $_POST['title'];
    $contenido = $_POST['content'];
    $categoria = $_POST['categoria'];
    $directorio_destino = '../view/images/news_images';
    $nombre_fichero = "imagen_noticia";
    
    // Escapar los datos de entrada
    $titulo = htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8');
    // No necesitas escapar el contenido, ya que se hace dentro de la función insertNoticia
    $categoria = htmlspecialchars($categoria, ENT_QUOTES, 'UTF-8');

    // Llamar a insertNoticia y pasarle los datos
    $noticias->insertNoticia($titulo, $categoria, $contenido, $directorio_destino, $nombre_fichero);
    
    echo "<script> location.href = location.href;</script>";
}


if (isset($_POST['hide-new'])) {
    $id = $_POST['new_id'];
    $noticias->HideNew($id);
    
    // Redirigir a la misma página para evitar re-envíos del formulario
    echo "<script> location.href = location.href;</script>";
    exit;
}

if (isset($_POST['show-new'])) {
    $id = $_POST['newB_id'];
    $noticias->ShowNew($id);
    
    // Redirigir a la misma página para evitar re-envíos del formulario
    echo "<script> location.href = location.href;</script>";
    exit;
}

// Obtener las noticias actualizadas después de la posible actualización
$noti = $noticias->GetNoticias();
$notiBaja = $noticias->GetNoticiasBaja();
?>
