
<?php
include "../template/zona_priv.php";
include "../template/header.php";
include "../template/menu.php";
include "../models/pasar.model.php";
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Asistencia</h1>
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
        <?php include "pasar.forms.view.php"; ?>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead class="text-white" style="background-color: #001f3f;">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Estudiante</th>
                    <th scope="col">Estado </th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $objMostrarAsistencia = new MostrarAsistencia();
                    $resultados = $objMostrarAsistencia->getMostrarAsistencia();

                    while($mostrarasistencia = mysqli_fetch_assoc($resultados)){
                ?>
                <tr>
                    <td><?= $mostrarasistencia['id_mostrar']; ?></td>
                    <td><?= $mostrarasistencia['estudiante_id']; ?></td>
                    <td <?= $mostrarasistencia['estado']; ?>></td>
                </tr>
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

<script>
$(document).ready(function() {
    $('#example1').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print', 'colvis'
        ]
    });
});
</script>
