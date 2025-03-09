<?php
    require_once("../model/NoticiasModel.php");

    $noticias = new NoticiasModel();
    
 
    $id = $_GET['id'];
    $noticia = $noticias->GetNoticiaById($id);
    $titulo = $noticia['title'];
    $categoria = $noticia['categoria'];
    $contenido = $noticia['content'];
    $imagen = $noticia['imagen'];
    $fecha = $noticia['fecha'];
    
   require_once("../view/NoticiasPresetView.php");

?>