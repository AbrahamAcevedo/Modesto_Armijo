
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 " style="height: 100vh;  background-color: #001f3f;">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="../dist/img/Logo.png" alt="ASISTECH" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">ASISTECH</span>

    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">

                <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="../views/perfil.view.php" class="d-block">
                    Abraham Acevedo
                </a>

            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="../views/asignatura.view.php" class="nav-link">
                        <i class="nav-icon bi bi-card-list"></i>
                        <p>
                            Lista Asignaturas
                            
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../views/usuarios.view.php" class="nav-link">
                        <i class="nav-icon bi bi-card-list"></i>
                        <p>
                            Lista Usuarios
                            
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../views/docente.view.php" class="nav-link">
                        <i class="nav-icon bi bi-card-list"></i>
                        <p>
                            Lista Docentes
                            
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../views/estudiante.view.php" class="nav-link">
                        <i class="nav-icon bi bi-card-list"></i>
                        <p>
                            Lista Estudiantes
                            
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">
                        <i class="nav-icon bi bi-check-all"></i>
                        <p>
                            Asistencia
                            <i class="fas fa-angle-left right" style="margin-top: 5px;"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                <!--<li class="nav-item">
                        <a href="../views/asignaturas/asignatura.view.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Asistencia Docentes</p>
                        </a>
                    </li>
                    -->
                    <li class="nav-item">
                        <a href="../views/grabar_asistencia.view.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Asistencia Estudiantes</p>
                        </a>
                    </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/template/cerrar_sesion.php" class="nav-link">

                        <p>
                            Cerrar sesión
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
