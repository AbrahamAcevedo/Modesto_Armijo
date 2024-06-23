
    <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#modal-default">
        Agregar una asignatura
    </button>



<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Nueva Asignatura</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/controllers/asignatura.controller.php" method="post">
                    <div class="mb-3">
                        <label for="nombreAsignatura" class="form-label">Nombre de la Asignatura</label>
                        <input type="text" class="form-control" id="nombreAsignatura" name="nombreAsignatura" placeholder="Ejemplo: Matemáticas">
                    </div>

                    <div class="mb-3">
                        <label for="cursoAsignatura" class="form-label">Curso</label>
                        <input type="text" class="form-control" id="cursoAsignatura" name="cursoAsignatura" placeholder="Ejemplo: Matemáticas">
                    </div>
                    <div class="mb-3">
                        <label for="turnoAsignatura" class="form-label">Turno</label>
                        <input type="text" class="form-control" id="turnoAsignatura" name="turnoAsignatura" placeholder="Ejemplo: Matemáticas">
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

