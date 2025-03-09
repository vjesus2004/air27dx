<?php
    require_once("../model/HQModel.php");
 
    $hq = new HQModel();
    $hqTableBaja = $hq->GetHQBaja();

    $hqTable = $hq->GetHQ();

    if(isset($_POST['clear-hq'])){
        $id = $_POST['contact_id'];
        $hq->DeleteHQ($id);

        header("Location: " . $_SERVER['REQUEST_URI']);

    }

    if(isset($_POST['active-hq'])){
        $idBaja = $_POST['contact_id_active'];
        $hq->ActiveHQ($idBaja);

        header("Location: " . $_SERVER['REQUEST_URI']);

    }
    require_once("../view/HQManagerView.php");


   