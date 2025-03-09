<?php
    require_once("../model/HQModel.php");
 
    $hq = new HQModel();
    
    require_once("../view/HQView.php");


    if(isset($_POST['send-hq'])){
        $motivo = $_POST['reason'];
        $nombre = $_POST['name'];
        $apellido = $_POST['lastname'];
        $email = $_POST['email'];
        $numero = $_POST['phone'];
        $mensaje = $_POST['message'];
        
        // Llamamos a la función insertHQ y capturamos el resultado
        $hq->insertHQ($nombre, $apellido, $email, $numero, $motivo, $mensaje);
    }
?>
