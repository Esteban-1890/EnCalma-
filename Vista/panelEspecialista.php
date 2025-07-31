<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../Css/style.css">
    <link rel="stylesheet" href="../bootstrap/js/mootstrap.js">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/iner.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="icon" href="../Imagenes/Logo_encalma.jpg" type="icon">
    <link rel="stylesheet" href="Css/Styles_login.css">
    <title>Panel de Especialistas</title>
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #A8DADC">
        <div class="container-fluid">
            <a class="navbar-brand" href="../Index.php"><img src="../Imagenes/Logo_encalma.jpg" alt="EnCalma"
                    class="Logo_principal"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link  active" aria-current="page" href="panelAdmin.php">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Especialistas.html">Actividades</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="Planes.html">Citas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Especialistas.html">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Especialistas.html">Sugerencias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal"
                            href="roles.php">Cerrar sesión</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</header>

<body>

    <div class="d-flex justify-content-between align-items-center px-5 pt-4" >

       
        <form action="registrarUsuarioEspecial.php" method="post">
            <button type="submit" class="btn btn-success px-4 py-2">
                <i class="bi bi-plus"></i> Agregar
            </button>
        </form>

        
        <form action="../Control/ctrlEspecialistas.php" method="post" class="d-flex align-items-center">
            <input class="form-control me-2" type="search" name="email" placeholder="Buscar" aria-label="Buscar" />
            <input type="hidden" name="opcion" value="2">
            <button class="btn btn-outline-dark" type="submit" onclick="location.href='buscarusuarioEspecial.php'">Buscar</button>
            
        </form>

    </div>

    <?php
    include("../Modelo/usuarioEspecialistas.php");
    $usu = new UsuarioEspecialistas();
    $usu->conectarBd();
    $usu->listarUsuarios();
    ?>

    <?php
    include("../includes/footer.php");
    ?>
</body>
</html>