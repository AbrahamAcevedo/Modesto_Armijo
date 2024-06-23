<?php
    include "../models/lista_estudiante.model.php";

if(isset($_POST['nombreEstudiante']) && isset($_POST['edadEstudiante']) && isset($_POST['tut']) && isset($_POST['tel']) && isset($_POST['cursoEstudiante']) && isset($_POST['turnoEstudiante']) && isset($_POST['edadEstudiante']) && isset($_POST['gen'])){

    $objEstudiante = new Estudiante();
    $nomE = $_POST['nombreEstudiante'];
    $edaE = $_POST['edadEstudiante'];
    $tut = $_POST['tut'];
    $tel = $_POST['tel'];
    $curE = $_POST['cursoEstudiante'];
    $turE = $_POST['turnoEstudiante'];
    $gen = $_POST['gen'];
    

    if($objEstudiante->addEstudiante($nomE, $edaE, $tut, $tel, $curE, $turE, $gen)){
        header("Location: ../views/estudiante.view.php?create=1");
    }else{
        header("Location: ../views/estudiante.view.php?create=0");
    }



}

if(isset($_GET['delete'])){
    $objEstudiante = new Estudiante();
    $idEstudiante = $_GET['delete'];

    if($objEstudiante->delEstudiante($idEstudiante)){
        header("Location: ../views/estudiante.view.php?delete=1");
    }else{
        header("Location: ../views/estudiante.view.php?delete=0");
    }
}
if(isset($_POST['modificaEstudiante']) && isset($_POST['nombre']) && isset($_POST['eda']) && isset($_POST['tuto']) && isset($_POST['tele']) && isset($_POST['cur']) && isset($_POST['turn'])){
    $objEstudiante = new Estudiante();
    $codigoEstudiante = $_POST['modificaEstudiante'];
    $nomE = $_POST['nombre'];
    $edaE = $_POST['eda'];
    $tut = $_POST['tuto'];
    $tel = $_POST['tele'];
    $curE = $_POST['cur'];
    $turE = $_POST['turn'];
    

    if($objEstudiante->updateEstudiante( $codigoEstudiante, $nomE, $edaE, $tut, $tel, $curE, $turE)){
        header("Location: ../views/estudiante.view.php?update=1");
    }else{
        header("Location: ../views/estudiante.view.php?update=0");
    }
}