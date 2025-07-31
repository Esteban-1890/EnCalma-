<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Css/style.css">
</head>
<?php $pagina = basename($_SERVER['PHP_SELF']); ?>

<header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #A8DADC">
        <div class="container-fluid">
            <a class="navbar-brand" href="Index.php"><img src="Imagenes/Logo_encalma.jpg" alt="EnCalma"
                    class="Logo_principal" style="border-radius: 40px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?= ($pagina == 'Index.php') ? 'active' : '' ?>" href="Index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($pagina == 'Nosotros.php') ? 'active' : '' ?>"
                            href="Nosotros.php">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($pagina == 'Planes.php') ? 'active' : '' ?>"
                            href="Planes.php">Planes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($pagina == 'Actividades.php') ? 'active' : '' ?>"
                            href="Actividades.php">Actividades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($pagina == 'Blog.php') ? 'active' : '' ?>" href="Blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($pagina == 'Vista/formSolicitudes.php') ? 'active' : '' ?>"
                            href="Vista/formSolicitudes.php">Especialistas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor: pointer;">Login</a>
                    </li>
                </ul>

                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar" />
                    <button class="btn btn-outline-dark" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
</header>