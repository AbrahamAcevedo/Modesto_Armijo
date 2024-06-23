<?php
include "../template/zona_priv.php";
include "../template/header.php";
include "../template/menu.php";
include "../models/lista_usuario.model.php";
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Usuarios</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Usuarios</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content" >
        <div class="card-header" style="background-color: #001f3f;">
            <?php include "usuario.forms.view.php"; ?>
        </div>
        
        <div class="card-body">
            <table  id="example1" class="table table-bordered table-striped">
                <thead class="text-white" style="background-color: #001f3f;">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Contraseña</th>
                    <th scope="col">Tipo de Usuario</th>
                    <th scope="col">Opciones</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $objUsuario = new Usuario();
                    $resultados = $objUsuario->getUsuario();

                    while($usuario = mysqli_fetch_assoc($resultados)){
                ?>
                <tr>
                    <td><?= $usuario['id_usuario']; ?></td>
                    <td><?= $usuario['username']; ?></td>
                    <td><?= $usuario['contraseña']; ?></td>
                    <td><?= $usuario['tipo_usuario_id']; ?></td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalupdate<?= $usuario['id_usuario']; ?>"><i class="bi bi-pencil-square"></i></button>
                        <a href="/controllers/lista_usuario.controller.php?delete=<?= $usuario['id_usuario']; ?>" class="btn btn-danger btn-sm"><i class="bi bi-trash3"></i></a>
                    </td>
                </tr>

                        <div class="modal fade" id="modalupdate<?= $usuario['id_usuario']; ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Editar Usuario</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/controllers/lista_usuario.controller.php" method="post">
                                            <div class="mb-3">
                                            <input type="hidden" name="modificaUsuario" value="<?= $usuario['id_usuario']; ?>">
                                            <label for="nombre" class="form-label">Nombre de usuario</label>
                                                <input type="text" class="form-control" value="<?= $usuario['username']; ?>" name="nombre" placeholder="Ejemplo: Matemáticas">
                                                <label for="contra" class="form-label">Contraseña</label>
                                                <input type="text" class="form-control" value="<?= $usuario['contraseña']; ?>" name="contra" placeholder="Ejemplo: Matemáticas">
                                                <label for="tip" class="form-label">Tipo de Usuario</label>
                                                <input type="number" class="form-control" value="<?= $usuario['tipo_usuario_id']; ?>" name="tip" placeholder="Ejemplo: Matemáticas">
                                            </div>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                    </form>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>

                <?php
                    }
                ?>
                <!-- Agrega más filas según sea necesario -->
                </tbody>
            </table>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
    </div>
</aside>
<!-- /.control-sidebar -->


<?php

    if(isset($_GET['create']) == 1){
        echo "<script>Swal.fire({
  title: 'Importing Files',
  text: 'Your import is running, keep working and we will let you know once it finishes.',
  toast: true,
  position: 'bottom-end',
  showCancelButton: false,
  showConfirmButton: false,
  timer: 5000 // Tiempo en milisegundos antes de cerrarse automáticamente
}).then(() => {
  console.log('Toast cerrado manualmente');
});</script>";
    }

include "../template/footer.php"; ?>




