
<?php
include "../template/zona_priv.php";
include "../template/header.php";
include "../template/menu.php";
include "../models/lista_docente.model.php";
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Docentes</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Docentes</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="card-header" style="background-color: #001f3f;">
        <?php include "docente.forms.view.php"; ?>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead class="text-white" style="background-color: #001f3f;">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Asignatura</th>
                    <th scope="col">Turno</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Opciones</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $objProfesor= new Profesor();
                    $resultados = $objProfesor->getProfesor();

                    while($profesor = mysqli_fetch_assoc($resultados)){
                ?>
                <tr>
                    <td><?= $profesor['id_profesor']; ?></td>
                    <td><?= $profesor['nombre']; ?></td>
                    <td><?= $profesor['correo']; ?></td>
                    <td><?= $profesor['telefono']; ?></td>
                    <td><?= $profesor['fecha_inicio']; ?></td>
                    <td><?= $profesor['asignatura_id']; ?></td>
                    <td><?= $profesor['turno_id']; ?></td>
                    <td><?= $profesor['genero']; ?></td>
                    <td><?= $profesor['tipo_usuario_id']; ?></td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalupdate<?= $profesor['id_profesor']; ?>"><i class="bi bi-pencil-square"></i></button>
                        <a href="/controllers/lista_docente.controller.php?delete=<?= $profesor['id_profesor']; ?>" class="btn btn-danger btn-sm"><i class="bi bi-trash3"></i></a>
                    </td>
                </tr>

                        <div class="modal fade" id="modalupdate<?= $profesor['id_profesor']; ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Editar Docente</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/controllers/lista_docente.controller.php" method="post">
                                            <div class="mb-3">
                                            <input type="hidden" name="modificaProfesor" value="<?= $profesor['id_profesor']; ?>">
                                                <label for="nombreProfesor" class="form-label">Nombre del Docente</label>
                                                <input type="text" class="form-control" value="<?= $profesor['nombre']; ?>" name="nombreProfesor" placeholder="Ejemplo: Matemáticas">
                                                <label for="correoProfesor" class="form-label">Correo</label>
                                                <input type="text" class="form-control" value="<?= $profesor['correo']; ?>" name="correoProfesor" placeholder="Ejemplo: Matemáticas">
                                                <label for="telefonoProfesor" class="form-label">Telefono</label>
                                                <input type="text" class="form-control" value="<?= $profesor['telefono']; ?>" name="telefonoProfesor" placeholder="Ejemplo: Matemáticas">
                                                <label for="asignaturaProfesor" class="form-label">Asignatura</label>
                                                <input type="text" class="form-control" value="<?= $profesor['asignatura_id']; ?>" name="asignaturaProfesor" placeholder="Ejemplo: Matemáticas">
                                                <label for="turnoProfesor" class="form-label">Turno</label>
                                                <input type="text" class="form-control" value="<?= $profesor['turno_id']; ?>" name="turnoProfesor" placeholder="Ejemplo: Matemáticas">
                                                <label for="generoProfesor" class="form-label">Genero</label>
                                                <input type="text" class="form-control" value="<?= $profesor['genero']; ?>" name="generoProfesor" placeholder="Ejemplo: Matemáticas">
                                                <label for="tipoProfesor" class="form-label">Tipo Usuario</label>
                                                <input type="text" class="form-control" value="<?= $profesor['tipo_usuario_id']; ?>" name="tipoProfesor" placeholder="Ejemplo: Matemáticas">
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
