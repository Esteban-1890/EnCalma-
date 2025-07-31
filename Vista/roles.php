<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Seleccionar Rol</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet" />

  <!-- Estilos personalizados -->
  <link rel="stylesheet" href="../Css/style.css" />
  <link rel="stylesheet" href="Css/Styles_login.css" />
</head>

<body>
  <!-- Encabezado -->
  <div class="hero-banner">
    <h1 class="fw-bold">¡Bienvenido!</h1>
  </div>


  <!-- Tarjeta de selección de roles -->

  <div class="rol-card">
    <h2 class="mb-4">Escoge tu rol correspondiente</h2>

    <!-- Botón Administrador -->
    <button class="btn rol-btn btn-admin" data-bs-toggle="modal" data-bs-target="#loginModal" data-role="Administrador">
      <i class="fas fa-user-shield"></i> Administrador
    </button>

    <!-- Botón Especialista -->
    <button class="btn rol-btn btn-specialist" data-bs-toggle="modal" data-bs-target="#loginModal"
      data-role="Especialista">
      <i class="fas fa-user-md"></i> Especialista
    </button>

   
    <a href="../index.php">
      <button class="btn rol-btn btn-exit mt-3">
        <i class="fas fa-arrow-left"></i> Home
      </button>
    </a>
  </div>

  <!-- MODAL Bootstrap de Inicio de Sesión -->
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content border-0 shadow-lg">
        <div class="modal-header text-black" style="background-color: #A8DADC; ">
          <h5 class="modal-title" id="loginModalLabel" style="font-weight: bold;">Iniciar Sesión</h5>
          <button type="button" class="btn-close btn-close-black" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <form action="../Control/ctrlRoles.php" method="POST">
          <div class="modal-body">
            <input type="hidden" name="rol" id="rolSeleccionado">

            <div class="mb-3">
              <label for="correo" class="form-label">Correo electrónico</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@correo.com"
                required>
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="••••••" required>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
              <i class="fas fa-times"></i> Cancelar
            </button>
            <button type="submit" class="btn btn-primary">
              <input type="hidden" name="opcion" value="2" />
              <i class="fas fa-sign-in-alt"></i> Ingresar
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php
  include("../includes/footer.php");
  ?>
  <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>