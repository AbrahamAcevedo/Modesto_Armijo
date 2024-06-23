<!-- views/profile.php -->
<?php
include "../template/zona_priv.php";
include "../template/header.php";
include "../template/menu.php";
include "../controllers/lista_docente.controller.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <!-- Incluye tus archivos CSS aquí -->
</head>
<body>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">User Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle"
                                         src="../dist/img/user2-160x160.jpg"
                                         alt="User profile picture">
                                </div>
                                <h3 class="profile-username text-center">Abraham Acevedo</h3>
                                <p class="text-muted text-center">Informático</p>
                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Educación</b>
                                        <p class="text-muted">
                                            Desarrollo Web.<br>
                                            Programación.<br>
                                            Sistemas Operativos.<br>
                                            Redes.<br>
                                            Bases de Datos.
                                        </p>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Datos Personales</b>
                                        <p class="text-muted">
                                            <strong>Edad:</strong> 21<br>
                                            <strong>Estado:</strong> Soltero<br>
                                            <strong>Teléfono:</strong> 81832435<br>
                                            <strong>Trabajo:</strong> Profesor
                                        </p>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="card">
                            
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="settings">
                                        <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                                            <?php
                                                $objProfesor= new Profesor();
                                                $resultados = $objProfesor->getProfesor();

                                                while($profesor = mysqli_fetch_assoc($resultados)){
                                            ?>
                                            
                                            <div class="form-group row">
                                            
                                                <label for="inputName" class="col-sm-2 col-form-label">Nombre</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputName" name="name" placeholder="Name" value="<?php echo $profesor['nombre']; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Correo </label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" value="<?php echo $profesor['correo']; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputExperience" class="col-sm-2 col-form-label">Telefono</label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputSkills" name="skills" placeholder="Skills" value="<?php echo $profesor['telefono']; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputSkills" class="col-sm-3 col-form-label">Asignatura</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="inputSkills" name="skills" placeholder="Skills" value="<?php echo $profesor['asignatura_id']; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputImage" class="col-sm-2 col-form-label">Agregar Imagen</label>
                                                <div class="col-sm-10">
                                                    <input type="file" name="file" id="file" accept="image/*" onchange="previewImage(event);">
                                                    <img id="preview" src="#" alt="Vista previa de la imagen" style="display: none; max-width: 100%;">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-danger">Submit</button>
                                                </div>
                                            </div>
                                            <?php
                                                }
                                            ?>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('preview');
                output.src = reader.result;
                output.style.display = 'block';
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</body>
</html>
<?php
include "../template/footer.php";
?>
