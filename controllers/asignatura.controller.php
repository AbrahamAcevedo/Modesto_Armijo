<?php
    include "../models/asignaturas.model.php";


if(isset($_POST['nombreAsignatura']) && isset($_POST['cursoAsignatura']) && isset($_POST['turnoAsignatura'])){

    $objAsignatura = new Asignaturas();
        $nom = $_POST['nombreAsignatura'];
        $cur = $_POST['cursoAsignatura'];
        $tur = $_POST['turnoAsignatura'];

    if($objAsignatura->addAsignatura($nom, $cur, $tur)){

        header("Location: ../views/asignatura.view.php?create=1");
    }else{
        header("Location: ../views/asignatura.view.php?create=0");
    }

}

if(isset($_GET['delete'])){
    $objAsignatura = new Asignaturas();
    $idAsignatura = $_GET['delete'];

    if($objAsignatura->delAsignatura($idAsignatura)){
        header("Location: ../views/asignatura.view.php?delete=1");
    }else{
        header("Location: ../views/asignatura.view.php?delete=0");
    }
}


if(isset($_POST['modificaAsignatura']) && isset($_POST['nombre']) && isset($_POST['cur']) && isset($_POST['tur'])){
    $objAsignatura = new Asignaturas();
    $codigoAsignatura = $_POST['modificaAsignatura'];
    $nombreAsignatura = $_POST['nombre'];
    $cursoAsignatura = $_POST['cur'];
    $turnoAsignatura = $_POST['tur'];

    if($objAsignatura->updateAsignatura( $codigoAsignatura, $nombreAsignatura, $cursoAsignatura, $turnoAsignatura)){
        header("Location: ../views/asignatura.view.php?update=1");
    }else{
        header("Location: ../views/asignatura.view.php?update=0");

    }
}