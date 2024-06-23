<?php
include "../template/header.php";
include "../template/zona_priv.php";
include "../template/menu.php";
include "../models/asistencia.model.php";
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Asistencia Estudiantes</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Asistencia</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="card-header" style="background-color: #001f3f;">
        <?php include "add.forms.view.php"; ?>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead class="text-white" style="background-color: #001f3f;">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Turno</th>
                    <th scope="col">Asignatura</th>
                    <th scope="col">Profesor</th>
                    <th scope="col">Opciones</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $objAsistenciaEstudiante= new AsistenciaEstudiante();
                    $resultados = $objAsistenciaEstudiante->getAsistenciaEstudiante();

                    while($asistenciaestudiante = mysqli_fetch_assoc($resultados)){
                ?>
                <tr>
                    <td><?= $asistenciaestudiante['id_asistencia_estudiante']; ?></td>
                    <td><?= $asistenciaestudiante['curso_id']; ?></td>
                    <td><?= $asistenciaestudiante['fecha']; ?></td>
                    <td><?= $asistenciaestudiante['turno_id']; ?></td>
                    <td><?= $asistenciaestudiante['asignatura_id']; ?></td>
                    <td><?= $asistenciaestudiante['profesor_id']; ?></td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalupdate<?= $asistenciaestudiante['id_asistencia_estudiante']; ?>"><i class="bi bi-pencil-square"></i></button>
                        <a href="/controllers/asistencia.controller.php?delete=<?= $asistenciaestudiante['id_asistencia_estudiante']; ?>" class="btn btn-danger btn-sm"><i class="bi bi-trash3"></i></a>
                        <a href="../views/pasar_asistencia.view.php?asistencia= <?=$asistenciaestudiante['id_asistencia_estudiante']; ?>" class="btn btn-info btn-sm"><i class="bi bi-floppy"></i></i></a>
                    </td>
                </tr>

                        <div class="modal fade" id="modalupdate<?= $asistenciaestudiante['id_asistencia_estudiante']; ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Editar Docente</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/controllers/asistencia.controller.php" method="post">
                                            <div class="mb-3">
                                            <input type="hidden" name="modificaAsistencia" value="<?= $asistenciaestudiante['id_asistencia_estudiante']; ?>">
                                                <label for="curso" class="form-label">Curso </label>
                                                <input type="text" class="form-control" value="<?= $asistenciaestudiante['curso_id']; ?>" name="curso" placeholder="Ejemplo: Matemáticas">
                                                <label for="fecha" class="form-label">Fecha</label>
                                                <input type="text" class="form-control" value="<?= $asistenciaestudiante['fecha']; ?>" name="fecha" placeholder="Ejemplo: Matemáticas">
                                                <label for="turno" class="form-label">Turno</label>
                                                <input type="text" class="form-control" value="<?= $asistenciaestudiante['turno_id']; ?>" name="turno" placeholder="Ejemplo: Matemáticas">
                                                <label for="asignatura" class="form-label">Asignatura</label>
                                                <input type="text" class="form-control" value="<?= $asistenciaestudiante['asignatura_id']; ?>" name="asignatura" placeholder="Ejemplo: Matemáticas">
                                                <label for="profe" class="form-label">Profesor</label>
                                                <input type="text" class="form-control" value="<?= $asistenciaestudiante['profesor_id']; ?>" name="profe" placeholder="Ejemplo: Matemáticas">
                                            </div>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                    </form>
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