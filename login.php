<?php
error_reporting(E_ALL);

// Muestra los errores directamente en el script
ini_set('display_errors', 1);

// También muestra los errores de inicio de PHP
ini_set('display_startup_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>inicio de Sesión </title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page" style="background-image: url('./dist/img/ciclo-escolar-nicaragua-2023-1024x682-1.jpg'); height: 100vh; background-size: cover; background-position: center;">>
    <h1 style="display: inline-block; font-size: 3em; color: white; text-shadow: 2px 2px 5px rgba(0, 0, 0, 1); margin-bottom: 4rem; ">Colegio Modesto Armijo Lozano</h1>
<div class="login-box" >
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
    <div class="card-header text-center">
            <a href="#" class="h1"><b>ASISTECH</b></a>
            <a href="https://iergrupo5.seogoogle.pro/" class="h1" style="position: absolute; top: 10px; right: 10px; font-size: 24em; color: black;"><i class="bi bi-x"></i></a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Inicia sesión</p>

            <form action="controllers/usuarios.controller.php" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Usuario" name="usuario">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fa-solid fa-user"></span>

                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="contrasena">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <!-- /.social-auth-links -->
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>

