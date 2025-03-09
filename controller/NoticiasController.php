<?php
require_once("../model/NoticiasModel.php");

$noticias = new NoticiasModel();
$noti = $noticias->GetNoticias();

if (isset($_POST['btn-noticia'])) {
    $id = $_POST['id'];
    $url = "NoticiasPresetController.php?id=" . urlencode($id);
    header('Location: ' . $url);
    exit;
}


require_once("../view/NoticiasView.php");
?>