<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Especialistas - EnCalma</title>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../Css/style.css" />
  <link rel="stylesheet" href="../Css/styleEspecialistas.css" />
  <link rel="icon" href="../Imagenes/Logo_encalma.jpg" type="icon" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<!-- Navbar -->

<body style="background-color: #f5f5f5">
<?php include("../includes/header.php") ?>
   <br><br>
  <section class="encabezado-actividades">
    <h1 class="titulo-actividades">Especialistas</h1>
  </section>

  <!-- NUEVA SECCIÓN DE TEXTO INFORMATIVO -->
  <section class="container mt-4 mb-5">
    <div class="row justify-content-center">
      <div class="col-md-10 text-center intro-actividades">
        <p>
            <h3>Establece buena conexión entre los profesionales de la salud.</h3>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure sunt recusandae dicta, alias facere laborum quisquam autem porro quo iste voluptatem eos esse provident eveniet quasi quia temporibus! Totam, inventore.
            Est illo nesciunt atque iusto sed, autem voluptatem consectetur, aperiam quod laudantium laborum iure, vel praesentium suscipit in assumenda ipsa rerum quasi. Porro consectetur voluptatum sint ipsum, corrupti inventore similique!
        </p>
        <hr class="hr-esp">
      </div>
    </div>
  </section>

  <section class="container py-3">
    <div class="row mb-4 align-items-center actividad-item">
      <div class="col-md-4 order-md-1">
        <div class="imagen-ajustada">
          <img src="https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg" alt="Sonidos naturales"
            class="img-fluid rounded">
        </div>
      </div>
      <div class="col-md-8 order-md-2">
        <div class="actividad-contenido p-3">
          <!-- <h4 class="titulo mb-2">Sonidos de la naturaleza</h4> -->
           <h3 style="text-align: center;">Antonio Rojas</h3>
          <p class="descripcion mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis fuga recusandae rerum beatae praesentium est quo doloribus, impedit accusamus dignissimos maiores enim repellat quae eveniet nisi tempore. Hic, et ipsa.
          Consequuntur reprehenderit atque consequatur est esse dolore. Non ut tenetur velit, debitis aspernatur nesciunt placeat corrupti perspiciatis assumenda error, hic soluta in dolor harum laborum, earum temporibus enim fuga quae!</p>
          <button class="btn btn-primary">Conectar</button>
        </div>
      </div>
    </div>

    <div class="row mb-4 align-items-center actividad-item">
      <div class="col-md-8 order-md-1">
        <div class="actividad-contenido p-3">
          <!-- <h4 class="titulo mb-2">Ejercicios de respiración</h4> -->
           <h3 style="text-align: center;">Mariana Flores</h3>
          <p class="descripcion mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia omnis sequi nemo delectus illum iure voluptates doloremque. Obcaecati magnam voluptatem debitis tenetur quas, autem, iste possimus porro, saepe minima dolorum?
          Sit incidunt nihil fugiat, veritatis mollitia, facilis quos ullam cumque molestias illum ab suscipit iure perferendis facere accusamus quis cupiditate eligendi sunt exercitationem aliquam tempora laudantium aut? Officiis, fuga cupiditate.</p>
          <button class="btn btn-primary">Conectar</button>
        </div>
      </div>
      <div class="col-md-4 order-md-2">
        <div class="imagen-ajustada">
          <img
            src="https://images.pexels.com/photos/733872/pexels-photo-733872.jpeg"
            alt="Respiración" class="img-fluid rounded">
        </div>
      </div>
    </div>

    <div class="row mb-4 align-items-center actividad-item">
      <div class="col-md-4 order-md-1">
        <div class="imagen-ajustada">
          <img src="https://images.pexels.com/photos/874158/pexels-photo-874158.jpeg" alt="Sonidos naturales"
            class="img-fluid rounded">
        </div>
      </div>
      <div class="col-md-8 order-md-2">
        <div class="actividad-contenido p-3">
          <!-- <h4 class="titulo mb-2">Sonidos de la naturaleza</h4> -->
           <h3 style="text-align: center;">Fernando Ortiz</h3>
          <p class="descripcion mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem sint soluta labore suscipit atque. Sint amet mollitia ad facilis doloribus distinctio, repudiandae, odit quas culpa, quam explicabo nisi dolorem labore?
          Perferendis molestias a exercitationem officia dolores quisquam velit sapiente sit totam natus cumque blanditiis qui illum ullam, nesciunt necessitatibus quam cum nemo quasi porro atque numquam. Perferendis voluptate dolorum voluptatum.</p>
          <button class="btn btn-primary">Conectar</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Formulario -->
    <div class="mt-5" style="margin-bottom: 20px;">
      <h5 class="text-center fw-bold">¿Te gustaría trabajar con nosotros?</h5>
      <p class="text-center">Envía tu solicitud</p>
      <div class="shadow-box mx-auto" style="max-width: 800px;">
        <form action="../Control/ctrlSolicitud.php" method="POST" enctype="multipart/form-data">
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Nombre:</label>
              <input type="text" name="nombre" class="form-control" placeholder="Tu nombre">
            </div>
            <div class="col-md-6">
              <label class="form-label">Apellidos:</label>
              <input type="text" name="apellidos" class="form-control" placeholder="Tus apellidos">
            </div>
            <div class="col-md-6">
              <label class="form-label">Edad:</label>
              <input type="text" name="edad" class="form-control" placeholder="Edad">
            </div>
            <div class="col-md-6">
              <label class="form-label">Correo electrónico:</label>
              <input type="email" name="email" class="form-control" placeholder="correo@ejemplo.com">
            </div>
            <div class="col-md-6">
              <label class="form-label">Experiencia:</label>
              <input type="text" name="experiencia" class="form-control" placeholder="Tu experiencia">
            </div>
            <div class="col-md-6">
              <label class="form-label">Curriculum:</label>
              <input type="file" name="curriculum" class="form-control">
            </div>
            <div class="col-md-6">
              <label class="form-label">Carta recomendación:</label>
              <input type="file" name="carta1" class="form-control">
            </div>
            <div class="col-md-6">
              <label class="form-label">Carta recomendación 2:</label>
              <input type="file" name="carta2" class="form-control">
            </div>
          </div>
          <div class="text-center mt-4">
            <input type="hidden" name="opcion" value="1" />
            <button type="submit" class="btn btn-primary">Enviar Solicitud</button>
          </div>
        </form>
      </div>
    </div>

</body>

<!-- Footer -->
<?php include("../includes/footer.php"); ?>

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const toggleButton = document.getElementById("darkModeToggle");
    const icon = document.getElementById("darkModeIcon");

    // Restaurar estado anterior si existe
    if (localStorage.getItem("darkMode") === "true") {
      document.body.classList.add("bg-dark", "text-white");
      icon.classList.remove("fa-moon");
      icon.classList.add("fa-sun");
    }

    toggleButton.addEventListener("click", function () {
      const isDark = document.body.classList.toggle("bg-dark");
      document.body.classList.toggle("text-white", isDark);

      // Cambia el ícono
      if (isDark) {
        icon.classList.remove("fa-moon");
        icon.classList.add("fa-sun");
      } else {
        icon.classList.remove("fa-sun");
        icon.classList.add("fa-moon");
      }

      // Guarda preferencia
      localStorage.setItem("darkMode", isDark);
    });
  });
</script>

<!-- Botón modo oscuro -->
<button id="darkModeToggle" class="btn btn-light position-fixed" style="bottom: 20px; right: 20px; z-index: 1050;">
  <i id="darkModeIcon" class="fas fa-moon"></i>
</button>
</body>

</html>