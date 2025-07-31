<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/dashboard.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>

<?php

session_start();
if (!isset($_SESSION['nombre'])) {
    // echo "<script>alert('Debes iniciar sesión primero'); window.location.href='login.php';</script>";
    // exit();
}
?>

<body>
    <div class="layout">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="user-info">
                <img src="Imagenes/Perfil.gif" alt="Foto Usuario" class="user-photo">
                <div>
                    <p class="user-name">
                        <?php echo $_SESSION['nomusuario']; ?>
                    </p>
                </div>
            </div>
            <nav class="menu">
                <ul>
                    <li><i class="fa fa-home"></i> Inicio</li>
                    <li><i class="fa fa-file-alt"></i> Documentos</li>
                    <li><i class="fa fa-database"></i> Proceso</li>
                    <li><i class="fa fa-envelope"></i> Mensajes</li>
                    <li class="active"><i class="fa fa-users"></i> Amigos
                        <ul class="submenu">
                            <li>Personas</li>
                            <li>Grupos</li>
                            <li>Crear grupo</li>
                        </ul>
                    </li>
                    <li><i class="fa fa-book"></i> Recursos</li>
                    <!-- <li><i class="fa fa-code"></i> REST services</li> -->
                    <!-- <li><i class="fa fa-rss"></i> News</li> -->
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
            <header class="topbar">
                <span class="breadcrumb"></span>
                <div class="topbar-right">
                    <span class="welcome-msg">Bienvenido a tu <strong style="color: #12d1f3;">Perfil</strong></span>
                    <i class="fa fa-bell"></i>
                    <a href="cerrar.php" class="logout-btn"><i class="fa fa-sign-out-alt"></i> Cerrar Sesion</a>
                </div>
            </header>

            <!-- Profile Section -->
            <div class="content">
                <div class="profile-box">
                    <h3>Detalles del Perfil</h3>
                    <div class="profile-details">
                        <!-- https://cdn-icons-png.flaticon.com/512/3849/3849119.png -->
                        <img src="Imagenes/Perfil.gif" class="profile-img" /> <br>
                        <button class="change-btn"><i class="fa fa-camera"></i> Camabiar imagen</button>
                        <p class="profile-name"><strong>
                                <?php echo $_SESSION['nomusuario']; ?>
                            </strong></p>
                        <h6>Correo: </h6>
                        <p><a href="mailto:<?php echo $_SESSION['correo']; ?>">
                                <?php echo $_SESSION['correo']; ?>
                            </a>
                        </p>
                        <h6>Telefono:</h6>
                        <p>
                            <?php echo $_SESSION['telefono']; ?>
                        </p>
                    </div>
                </div>

                <div class="template-box">
                    <h3>Nivel de Procesos:</h3>
                    <h6>Actividad 1:</h6>
                    <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                            style="width: 25%">
                            25%
                        </div>
                    </div>

                    <h6>Actividad 2:</h6>
                    <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="50"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                            style="width: 50%">
                            50%
                        </div>
                    </div>

                    <h6>Actividad 3:</h6>
                    <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 75%">
                            75%
                        </div>
                    </div>

                    <h6>Actividad 4:</h6>
                    <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="100"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                            style="width: 100%">
                            100%
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>