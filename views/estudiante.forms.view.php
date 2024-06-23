
<button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#modal-default">
        Agregar Estudiante
    </button>

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Nuevo Estudiante</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/controllers/lista_estudiante.controller.php" method="post">
                    <div class="mb-3">
                        <label for="nombreEstudiante" class="form-label">Nombre del Estudiante</label>
                        <input type="text" class="form-control" id="nombreEstudiante" name="nombreEstudiante" placeholder="Ejemplo: Matemáticas">
                    </div>
                    <div class="mb-3">
                        <label for="edadEstudiante" class="form-label">Edad</label>
                        <input type="number" class="form-control" id="edadEstudiante" name="edadEstudiante" placeholder="Ejemplo: Matemáticas">
                    </div>
                    <div class="mb-3">
                        <label for="tut" class="form-label">Tutor</label>
                        <input type="text" class="form-control" id="tut" name="tut" placeholder="Ejemplo: Matemáticas">
                    </div>
                    <div class="mb-3">
                        <label for="tel" class="form-label">Telefono</label>
                        <input type="text" class="form-control" id="tel" name="tel" placeholder="Ejemplo: Matemáticas">
                    </div>
                    <div class="mb-3">
                        <label for="cursoEstudiante" class="form-label">Curso</label>
                        <input type="text" class="form-control" id="cursoEstudiante" name="cursoEstudiante" placeholder="Ejemplo: Matemáticas">
                    </div>
                    <div class="mb-3">
                        <label for="turnoEstudiante" class="form-label">Turno</label>
                        <input type="text" class="form-control" id="turnoEstudiante" name="turnoEstudiante" placeholder="Ejemplo: Matemáticas">
                    </div>
                    <div class="mb-3">
                        <label for="gen" class="form-label">Genero</label>
                        <input type="text" class="form-control" id="gen" name="gen" placeholder="Ejemplo: Matemáticas">
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