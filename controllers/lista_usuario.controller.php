<?php
    include "../models/lista_usuario.model.php";

if(isset($_POST['nombreUsuario']) && isset($_POST['nombreContraseña']) && isset($_POST['numeroTipo'])){

    $objUsuario = new Usuario();
    $user = $_POST['nombreUsuario'];
    $contra = $_POST['nombreContraseña'];
    $tip = $_POST['numeroTipo'];

    if($objUsuario->addUsuario($user, $contra, $tip)){
        header("Location: ../views/usuarios.view.php?create=1");
    }else{
        header("Location: ../views/usuarios.view.php?create=0");
    }

}

if(isset($_GET['delete'])){
    $objUsuario = new Usuario();
    $idUsuario = $_GET['delete'];

    if($objUsuario->delUsuario($idUsuario)){
        header("Location: ../views/usuarios.view.php?delete=1");
    }else{
        header("Location: ../views/usuarios.view.php?delete=0");
    }
}

if(isset($_POST['modificaUsuario']) && isset($_POST['nombre']) && isset($_POST['contra']) && isset($_POST['tip'])){
    $objUsuario = new Usuario();
    $codigoUsuario = $_POST['modificaUsuario'];
    $nombreUsuario = $_POST['nombre'];
    $contraseñaUsuario = $_POST['contra'];
    $tipoUsuario = $_POST['tip'];

    if($objUsuario->updateUsuario( $codigoUsuario, $nombreUsuario, $contraseñaUsuario, $tipoUsuario)){
        header("Location: ../views/usuarios.view.php?update=1");
    }else{
        header("Location: ../views/usuarios.view.php?update=0");
    }
}