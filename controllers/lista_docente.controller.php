<?php
    include "../models/lista_docente.model.php";

if(isset($_POST['nombreDocente']) && isset($_POST['docenteAsignatura']) && isset($_POST['turnoDocente']) && isset($_POST['TipoUsuario'])){

    $objProfesor = new Profesor();

    $nomP = $_POST['nombreDocente'];
    $core = $_POST['core'];
    $tel = $_POST['cel'];
    $fech = $_POST['fecha'];
    $docA = $_POST['docenteAsignatura'];
    $turD = $_POST['turnoDocente'];
    $gen= $_POST['gen'];
    $tipU = $_POST['TipoUsuario'];

    if($objProfesor->addProfesor($nomP, $core, $tel, $fech,  $docA, $turD, $gen, $tipU)){
        header("Location: ../views/docente.view.php?create=1");
    }else{
        header("Location: ../views/docente.view.php?create=0");
    }



}

if(isset($_GET['delete'])){
    $objProfesor = new Profesor();
    $idProfesor = $_GET['delete'];

    if($objProfesor->delProfesor($idProfesor)){
        header("Location: ../views/docente.view.php?delete=1");
    }else{
        header("Location: ../views/docente.view.php?delete=0");
    }
}

if(isset($_POST['modificaProfesor']) && isset($_POST['nombreProfesor']) && isset($_POST['correoProfesor']) && 
isset($_POST['telefonoProfesor']) && isset($_POST['asignaturaProfesor']) && isset($_POST['turnoProfesor']) && 
isset($_POST['generoProfesor'])&& isset($_POST['tipoProfesor'])){
    $objProfesor = new Profesor();

    $codigoProfesor = $_POST['modificaProfesor'];
    $nombre = $_POST['nombreProfesor'];
    $correo = $_POST['correoProfesor'];
    $tel = $_POST['telefonoProfesor'];
    $asig = $_POST['asignaturaProfesor'];
    $tur= $_POST['turnoProfesor'];
    $gen= $_POST['generoProfesor'];
    $tip = $_POST['tipoProfesor'];

    if($objProfesor->updateProfesor( $codigoProfesor, $nombre, $correo, $tel, $asig, $tur, $gen, $tip)){
        header("Location: ../views/docente.view.php?update=1");
    }else{
        header("Location: ../views/docete.view.php?update=0");
    }
}
