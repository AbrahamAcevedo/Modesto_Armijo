
<button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#modal-default">
        Crear Asistencia
    </button>

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Crear Asistencia</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/controllers/asistencia.controller.php" method="post">
                    <div class="mb-3">
                        <label for="cur" class="form-label">Curso</label>
                        <input type="text" class="form-control" id="cur" name="cur" placeholder="Ejemplo: Matemáticas">
                    </div>
                    <div class="mb-3">
                        <?php
                        $fechaActual = date('Y-m-d'); 
                        ?>
                        <label for="fech" class="form-label">Fecha inicio</label>
                        <input type="date" class="form-control" id="fech" name="fech" value="<?php echo $fechaActual; ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="turn" class="form-label">Turno</label>
                        <input type="number" class="form-control" id="turn" name="turn" placeholder="Ejemplo: Matemáticas">
                    </div>
                    <div class="mb-3">
                        <label for="asig" class="form-label">Asignatura</label>
                        <input type="text" class="form-control" id="asig" name="asig" placeholder="Ejemplo: Matemáticas">
                    </div>
                    <div class="mb-3">
                        <label for="pro" class="form-label">Profesor</label>
                        <input type="text" class="form-control" id="pro" name="pro" placeholder="Ejemplo: Matemáticas">
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