<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Actividades - EnCalma</title>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="Css/style.css" />
  <link rel="stylesheet" href="Css/styleActividades.css" />
  <link rel="icon" href="Imagenes/Logo_encalma.jpg" type="icon" />
</head>

<!-- Navbar -->
<?php include("includes/header.php") ?>

<body style="background-color: #f5f5f5">
  <!-- Imagen de fondo y título -->
  <section class="encabezado-actividades">
    <h1 class="titulo-actividades">Actividades</h1>
  </section>

  <!-- NUEVA SECCIÓN DE TEXTO INFORMATIVO -->
  <section class="container mt-4 mb-5">
    <div class="row justify-content-center">
      <div class="col-md-10 text-center intro-actividades">
        <p>
          En esta sección encontrarás diferentes herramientas para mejorar tu bienestar emocional: ejercicios de
          respiración, sonidos relajantes y más. Todas las actividades están diseñadas para ayudarte a encontrar calma
          en tu día a día.
        </p>
      </div>
    </div>
  </section>

  <section class="container py-5">

    <!-- Actividad 1: Texto izquierda, imagen derecha -->
    <div class="row mb-4 align-items-center actividad-item">
      <div class="col-md-8 order-md-1">
        <div class="actividad-contenido p-3">
          <h4 class="titulo mb-2">Ejercicios de respiración</h4>
          <p class="descripcion mb-3">Un espacio para aprender a respirar mediante ejercicios que te ayudarán a
            controlar la ansiedad.</p>
          <button class="btn btn-primary">Acceder</button>
        </div>
      </div>
      <div class="col-md-4 order-md-2">
        <div class="imagen-ajustada">
          <img
            src="https://images.unsplash.com/photo-1658501819393-8151a85a1cf2?q=80&w=774&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="Respiración" class="img-fluid rounded">
        </div>
      </div>
    </div>

    <!-- Actividad 2: Imagen izquierda, texto derecha -->
    <div class="row mb-4 align-items-center actividad-item">
      <div class="col-md-4 order-md-1">
        <div class="imagen-ajustada">
          <img src="https://cdn.pixabay.com/photo/2016/08/01/20/15/girl-1562025_1280.jpg" alt="Sonidos naturales"
            class="img-fluid rounded">
        </div>
      </div>
      <div class="col-md-8 order-md-2">
        <div class="actividad-contenido p-3">
          <h4 class="titulo mb-2">Sonidos de la naturaleza</h4>
          <p class="descripcion mb-3">Sonidos que te ayudarán a relajarte en cualquier momento del día.</p>
          <button class="btn btn-primary">Acceder</button>
        </div>
      </div>
    </div>

    <!-- Actividad 3: Texto izquierda, imagen derecha -->
    <div class="row mb-4 align-items-center actividad-item">
      <div class="col-md-8 order-md-1">
        <div class="actividad-contenido p-3">
          <h4 class="titulo mb-2">Recomendaciones (podcast y música relajante)</h4>
          <p class="descripcion mb-3">Las mejores recomendaciones diseñadas para ti. Música, podcasts y más.</p>
          <button class="btn btn-primary">Acceder</button>
        </div>
      </div>
      <div class="col-md-4 order-md-2">
        <div class="imagen-ajustada">
          <img
            src="https://images.unsplash.com/photo-1527150122806-f682d2fd8b09?q=80&w=1631&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="Recomendaciones" class="img-fluid rounded">
        </div>
      </div>
    </div>
  </section>
</body>

<!-- Footer -->
<?php include("includes/footer.php"); ?>

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>