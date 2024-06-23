    <!-- Nuevo Botón Agregar Cliente con Icono de Sign Plus -->
    <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#modal-default">
        Agregar un Usuario
    </button>
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Nuevo Usuario</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/controllers/lista_usuario.controller.php" method="post">
                    <div class="mb-3">
                        <label for="nombreUsuario" class="form-label">Nombre de usuario</label>
                        <input type="text" class="form-control" id = "nombreUsuario" name="nombreUsuario" placeholder="Ejemplo: Matemáticas">
                        <label for="nombreContraseña" class="form-label">Contraseña</label>
                        <input type="text" class="form-control" id= "nombreContraseña" name="nombreContraseña" placeholder="Ejemplo: Matemáticas">
                        <label for="numeroTipo" class="form-label">Tipo de Usuario</label>
                        <input type="text" class="form-control" id = "numeroTipo" name="numeroTipo" placeholder="Ejemplo: Matemáticas">
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
