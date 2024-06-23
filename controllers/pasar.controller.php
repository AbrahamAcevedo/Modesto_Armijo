<?php
    include "../models/pasar.model.php";

if(isset($_POST['estudiante']) && isset($_POST['esta'])){

    $objMostrarAsistencia = new MostrarAsistencia();
    $estu = $_POST['estudiante'];
    $est = $_POST['esta'];

    if($objMostrarAsistencia->addMostrarAsistencia($estu, $est)){
        header("Location: ../views/pasar_asistencia.view.php?create=1");
    }else{
        header("Location: ../views/pasar_asistencia.view.php?create=0");
    }

}