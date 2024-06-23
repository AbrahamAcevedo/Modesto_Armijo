
<button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#modal-default">
        Agregar Estudiantes a la Asignatura
    </button>


<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">agregar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/controllers/pasar.controller.php" method="post">
                    <div class="mb-3">
                        <label for="estudiante" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="estudiante" name="estudiante" >
                        <label for="esta" class="form-label">Estado</label><br>
                        <select name="esta" class="form-control" id="esta">
                            <option >Presente</option>
                            <option >Ausente</option>
                            <option >Retraso</option>
                            <option >Justificado</option>
                        </select>
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
<script>
function limitarCheckbox(seleccionado) {
    var checkboxes = document.getElementsByName('checkbox_asistencia');
    checkboxes.forEach(function(checkbox) {
        if (checkbox !== seleccionado) {
            checkbox.checked = false;
        }
    });
}
</script>