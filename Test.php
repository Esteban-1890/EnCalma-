<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="Css/style.css" />
    <!-- Línea eliminada porque era incorrecta -->
    <!-- <link rel="stylesheet" href="bootstrap/js/mootstrap.js"> -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="bootstrap/css/iner.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" href="Imagenes/Logo_encalma.jpg" type="icon" />
    <link rel="stylesheet" href="Css/Styles_login.css" />
    <link rel="stylesheet" href="Css/stylesTest.css" />
    <title>Test</title>
</head>
<header>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #A8DADC">
    <div class="container-fluid">
      <a class="navbar-brand" href="Index.html"
        ><img src="Imagenes/Logo_encalma.jpg" alt="EnCalma" class="Logo_principal"
      /></a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Index.html"
              >Inicio</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Nosotros.html">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Planes.html">Planes</a>
          </li>
          <li class="nav-item"><a class="nav-link" href="#">Actividades</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Especialistas</a></li>
          <li class="nav-item">
            <a
              class="nav-link"
              data-bs-toggle="modal"
              data-bs-target="#exampleModal"
              style="cursor: pointer"
              >Login</a
            >
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input
            class="form-control me-2"
            type="search"
            placeholder="Buscar"
            aria-label="Buscar"
          />
          <button class="btn btn-outline-dark" type="submit">Buscar</button>
        </form>
      </div>
    </div>
  </nav>
</header>

<body>
  <div class="container py-5">
    <h2 class="mb-4 text-center">Test "Inventario de Ansiedad de Beck(BAI)"</h2>
    <p class="mb-4 text-center">
      Este test, llamado Inventario de Ansiedad de Beck (BAI), te ayudará a
      conocer el nivel de ansiedad que podrías estar experimentando. Solo
      responde con sinceridad cómo te has sentido durante la última semana.
      ¡Es rápido y puede darte información útil sobre tu bienestar!
    </p>

    <form id="baiForm" method="POST" action="Control/Testcontrol.php">
      <div
        class="form-container row g-3 overflow-auto"
        style="max-height: 500px"
      >
        <?php
          $preguntas = [
            "Sensación de hormigueo o entumecimiento",
            "Sensación de calor",
            "Debilidad en las piernas",
            "Incapacidad para relajarse",
            "Miedo a que ocurra lo peor",
            "Mareos o sensación de desmayo",
            "Palpitaciones o aceleración del corazón",
            "Sensación de inestabilidad",
            "Terror o miedo",
            "Nerviosismo",
            "Sensación de asfixia",
            "Temblor en las manos",
            "Inquietud",
            "Temor a perder el control",
            "Dificultad para respirar",
            "Miedo a morir",
            "Sensación de miedo",
            "Problemas para tragar",
            "Temblor en el cuerpo",
            "Sensación de desmayo",
            "Rubor facial"
          ];
          for ($i = 1; $i <= 21; $i++):
        ?>
        <div class="col-md-6">
          <label class="form-label"><?= $preguntas[$i - 1] ?></label>
          <select class="form-select" name="q<?= $i ?>" required>
            <option value="" disabled selected>Selecciona una opción</option>
            <option value="0">0 - Nada</option>
            <option value="1">1 - Leve</option>
            <option value="2">2 - Moderado</option>
            <option value="3">3 - Grave</option>
          </select>
        </div>
        <?php endfor; ?>
      </div>

      <div class="text-center mt-4">
        <button type="submit" class="btn btn-primary">Calcular resultado</button>
      </div>
    </form>
  </div>

  <!-- Modal resultado -->
  <?php if (isset($_GET['total'])): ?>
<div
  class="modal fade show d-block"
  id="resultModal"
  tabindex="-1"
  aria-hidden="true"
  style="background: rgba(0,0,0,0.5)"
>
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Resultado del Test</h5>
        <!-- Botón "X" para cerrar y reiniciar formulario -->
        <button type="button" class="btn-close" aria-label="Cerrar" onclick="cerrarModalYReiniciar()"></button>
      </div>
      <div class="modal-body">
        <p>
          Tu puntuación total es <strong><?= $_GET['total'] ?></strong>.<br />
          Nivel de ansiedad: <strong><?= $_GET['nivel'] ?></strong>.
        </p>
        <hr />
        <p class="text-center"></p>
        <!--<div class="d-grid">
          <a href="/registro" class="btn btn-success">Regístrate gratis</a>
        </div>-->
      </div>
    </div>
  </div>
</div>

<!-- Script para cerrar el modal y reiniciar el formulario -->
<script>
  function cerrarModalYReiniciar() {
    // Ocultar modal
    const modal = document.getElementById('resultModal');
    modal.classList.remove('show', 'd-block');
    modal.style.display = 'none';
    document.body.classList.remove('modal-open');
    document.querySelector('.modal-backdrop')?.remove();

    // Reiniciar formulario
    const form = document.getElementById('baiForm');
    if (form) form.reset();

    // Opcional: limpiar la URL (para quitar ?total=xx&nivel=xx)
    if (history.pushState) {
      const urlSinParametros = window.location.protocol + "//" + window.location.host + window.location.pathname;
      history.replaceState(null, null, urlSinParametros);
    }
  }
</script>
<?php endif; ?>


  <!-- Footer -->
  <footer class="text-black py-4" style="background-color: #A8DADC">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h5>Sobre Nosotros</h5>
          <p>
            Conoce más de nuestra historia
            <a href="Nosotros.html" class="text-blue">Aquí</a>
          </p>
        </div>
        <div class="col-md-4">
          <h5>Enlaces</h5>
          <ul class="list-unstyled">
            <li><a href="index.html" class="text-blue">Inicio</a></li>
            <li><a href="#" class="text-blue">Servicios</a></li>
            <li><a href="iniciar_sesion.html" class="text-blue">Iniciar Sesión</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h5>Contacto</h5>
          <address>
            <p>210 Calle Agunstin, Estado de México, México</p>
            <p>Email: contacto@ejemplo.com</p>
            <p>Teléfono: 5591950872</p>
          </address>
        </div>
      </div>
      <div class="text-center mt-3">
        <p>&copy; 2025 EnCalma. Todos los derechos reservados.</p>
      </div>
    </div>
  </footer>

  <!-- Agregar script de Bootstrap JS al final -->
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
