
<button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#modal-default">
        Agregar Docente
    </button>

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Nuevo Docente</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/controllers/lista_docente.controller.php" method="post">
                    <div class="mb-3">
                        <label for="nombreDocente" class="form-label">Nombre del Docente</label>
                        <input type="text" class="form-control" id="nombreDocente" name="nombreDocente" placeholder="Ejemplo: Matemáticas">
                    </div>
                    <div class="mb-3">
                        <label for="core" class="form-label">Correo</label>
                        <input type="text" class="form-control" id="core" name="core" placeholder="Ejemplo: Matemáticas">
                    </div>
                    <div class="mb-3">
                        <label for="cel" class="form-label">Telefono</label>
                        <input type="number" class="form-control" id="cel" name="cel" placeholder="Ejemplo: Matemáticas">
                    </div>
                    <div class="mb-3">
                        <?php
                        $fechaActual = date('Y-m-d'); 
                        ?>
                        <label for="fecha" class="form-label">Fecha inicio</label>
                        <input type="date" class="form-control" id="fecha" name="fecha" value="<?php echo $fechaActual; ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="docenteAsignatura" class="form-label">Asignatura</label>
                        <input type="number" class="form-control" id="docenteAsignatura" name="docenteAsignatura" placeholder="Ejemplo: Matemáticas">
                    </div>
                    <div class="mb-3">
                        <label for="turnoDocente" class="form-label">Turno Usuario</label>
                        <input type="text" class="form-control" id="turnoDocente" name="turnoDocente" placeholder="Ejemplo: Matemáticas">
                    </div>
                    <div class="mb-3">
                        <label for="gen" class="form-label">Genero</label>
                        <input type="text" class="form-control" id="gen" name="gen" placeholder="Ejemplo: Matemáticas">
                    </div>
                    <div class="mb-3">
                        <label for="TipoUsuario" class="form-label">Tipo de Usuario</label>
                        <input type="text" class="form-control" id="TipoUsuario" name="TipoUsuario" placeholder="Ejemplo: Matemáticas">
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

</div>