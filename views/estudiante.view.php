<?php
include "../template/zona_priv.php";
include "../template/header.php";
include "../template/menu.php";
include "../models/lista_estudiante.model.php";
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Estudiantes</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Estudiantes</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="card-header" style="background-color: #001f3f;">
        <?php include "estudiante.forms.view.php"; ?>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead class="text-white" style="background-color: #001f3f;">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Tutor</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Turno</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Opciones</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $objEstudiante= new Estudiante();
                    $resultados = $objEstudiante->getEstudiante();

                    while($estudiante = mysqli_fetch_assoc($resultados)){
                ?>
                <tr>
                    <td><?= $estudiante['id_estudiante']; ?></td>
                    <td><?= $estudiante['nombre']; ?></td>
                    <td><?= $estudiante['edad']; ?></td>
                    <td><?= $estudiante['nombre_tutor']; ?></td>
                    <td><?= $estudiante['telefono']; ?></td>
                    <td><?= $estudiante['curso_id']; ?></td>
                    <td><?= $estudiante['turno_id']; ?></td>
                    <td><?= $estudiante['genero']; ?></td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalupdate<?= $estudiante['id_estudiante']; ?>"><i class="bi bi-pencil-square"></i></button>
                        <a href="/controllers/lista_estudiante.controller.php?delete=<?= $estudiante['id_estudiante']; ?>" class="btn btn-danger btn-sm"><i class="bi bi-trash3"></i></a>
                    </td>
                </tr>

                        <div class="modal fade" id="modalupdate<?= $estudiante['id_estudiante']; ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Editar Docente</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/controllers/lista_estudiante.controller.php" method="post">
                                            <div class="mb-3">
                                            <input type="hidden" name="modificaEstudiante" value="<?= $estudiante['id_estudiante']; ?>">
                                                <label for="nombre" class="form-label">Nombre del Estudiante</label>
                                                <input type="text" class="form-control" value="<?= $estudiante['nombre']; ?>" name="nombre" placeholder="Ejemplo: Matemáticas">
                                                <label for="eda" class="form-label">Edad</label>
                                                <input type="text" class="form-control" value="<?= $estudiante['edad']; ?>" name="eda" placeholder="Ejemplo: Matemáticas">
                                                <label for="tuto" class="form-label">Tutor</label>
                                                <input type="text" class="form-control" value="<?= $estudiante['nombre_tutor']; ?>" name="tuto" placeholder="Ejemplo: Matemáticas">
                                                <label for="tele" class="form-label">Telefono</label>
                                                <input type="text" class="form-control" value="<?= $estudiante['telefono']; ?>" name="tele" placeholder="Ejemplo: Matemáticas">
                                                <label for="cur" class="form-label">Curso</label>
                                                <input type="text" class="form-control" value="<?= $estudiante['curso_id']; ?>" name="cur" placeholder="Ejemplo: Matemáticas">
                                                <label for="turn" class="form-label">Turno</label>
                                                <input type="text" class="form-control" value="<?= $estudiante['turno_id']; ?>" name="turn" placeholder="Ejemplo: Matemáticas">

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
