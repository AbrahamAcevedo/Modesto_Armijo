<?php
    include "../models/asistencia.model.php";

if(isset($_POST['cur']) && isset($_POST['fech']) && isset($_POST['turn']) && isset($_POST['asig']) && isset($_POST['pro']) ){

    $objAsistenciaEstudiante = new AsistenciaEstudiante();

    $curss = $_POST['cur'];
    $fech = $_POST['fech'];
    $turn = $_POST['turn'];
    $asig = $_POST['asig'];
    $pro = $_POST['pro'];
    if($objAsistenciaEstudiante->addAsistenciaEstudiante($curss, $fech, $turn, $asig, $pro)){
        header("Location: ../views/grabar_asistencia.view.php?create=1");
    }else{
        header("Location: ../views/grabar_asistencia.view.php?create=0");
    }



}

if(isset($_GET['delete'])){
    $objAsistenciaEstudiante = new AsistenciaEstudiante();
    $idAsistenciaEstudiante = $_GET['delete'];

    if($objAsistenciaEstudiante->delAsistenciaEstudiante($idAsistenciaEstudiante)){
        header("Location: ../views/grabar_asistencia.view.php?delete=1");
    }else{
        header("Location: ../views/grabar_asistencia.view.php?delete=0");
    }
}

if(isset($_POST['modificaAsistencia']) && isset($_POST['curso']) && isset($_POST['turno']) && isset($_POST['asignatura']) && isset($_POST['profe']) ){
    $objAsistenciaEstudiante = new AsistenciaEstudiante();

    $codigoAsistencia = $_POST['modificaAsistencia'];
    $curso = $_POST['curso'];
    $turno = $_POST['turno'];
    $asignatura = $_POST['asignatura'];
    $profesor= $_POST['profe'];

    if($objAsistenciaEstudiante->updateAsistenciaEstudiante( $codigoAsistencia, $curso, $turno, $asignatura, $profesor)){
        header("Location: ../views/grabar_asistencia.view.php?update=1");
    }else{
        header("Location: ../views/grabar_asistencia.view.php?update=0");
    }
}
