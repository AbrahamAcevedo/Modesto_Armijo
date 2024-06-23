<?php

session_start();
    include "../models/usuarios.model.php";

    if(isset($_POST['usuario']) && isset($_POST['contrasena'])){
        $objUsuario = new Users();

        $objUsuario->usuario = $_POST['usuario'];
        $objUsuario->contrasena = $_POST['contrasena'];


        if($res = $objUsuario->authenticate())
        {
            $_SESSION['usuario'] = mysqli_fetch_array($res);

            header("Location: ../index.php");
        }else{
            header("Location: ../login.php?error=1");
        }

    }