<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="bootstrap/js/mootstrap.js">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/iner.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <link rel="icon" href="Imagenes/Logo_encalma.jpg" type="icon" style="border-radius: 20px;">
    <link rel="stylesheet" href="Css/Styles_login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Nosotros</title>
</head>

<?php include("includes/header.php") ?>

<body>
  <!-- Modal Iniciar Sesion -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="background-color: #A8DADC; opacity: 0.9;">
                <div class="modal-header">
                    <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Iniciar Sesion</h1> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="z">
                    <main>
                        <section class="sec-inicio">
                            <div class="contenedor">
                                <div class="formulario">
                                    <form action="Control/ctrlUsuario.php" method="post">
                                        <h2>Iniciar Sesión</h2>

                                        <div class="input-contenedor">
                                            <i class="fa-regular fa-user"></i>
                                            <input type="email" name="correo_e" id="correo_e" required>
                                            <label for="correo_e" class="form-label">Correo</label>
                                        </div>

                                        <div class="input-contenedor">
                                            <i id="togglePassword" class="fa-solid fa-eye"></i>
                                            <input type="password" name="contrasena" id="contrasena" required>
                                            <label for="contrasena" class="form-label">Contraseña</label>
                                        </div>

                                        <input type="hidden" name="opcion" value="7">

                                        <div>
                                            <button type="submit" class="boton-sesion"
                                                style="border-radius: 40px;">Acceder</button>
                                        </div>
                                        <br>

                                        <a href="Vista/ingresarUsuario.php">
                                            <button type="button" class="btn btn-dark boton-sesion"
                                                style="border-radius: 40px; color: #ffffff; background-color: black;">
                                                Registrarse
                                            </button>
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </main>

                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
                        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
                        crossorigin="anonymous">
                        </script>

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
                        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
                        crossorigin="anonymous">
                        </script>

                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            const togglePassword = document.getElementById('togglePassword');
                            const password = document.getElementById('contrasena');

                            togglePassword.addEventListener('click', function () {
                                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                                password.setAttribute('type', type);

                                // Cambia el ícono del ojo abierto/cerrado
                                togglePassword.classList.toggle('fa-eye');
                                togglePassword.classList.toggle('fa-eye-slash');
                            });
                        });
                    </script>
                </div>

            </div>
        </div>
    </div>

  <section class="py-5 bg-light" id="nosotros">
    <div class="container">
      <div class="row align-items-center">
        <!-- Imagen -->
        <div class="col-md-6 mb-4 mb-md-0">
          <img
            src="https://cdn-3.expansion.mx/dims4/default/0a874b1/2147483647/strip/true/crop/2121x1414+0+0/resize/1800x1200!/format/webp/quality/80/?url=https%3A%2F%2Fcdn-3.expansion.mx%2F07%2F5d%2Fe758e60b4658b145422622e5011e%2Fcursoenlinea.jpg"
            alt="Nosotros" class="img-fluid rounded shadow">
        </div>

        <!-- Texto -->
        <div class="col-md-6">
          <h2 class="mb-3">Sobre Nosotros</h2>
          <p class="text-muted">
            En <strong>EnCalma</strong> creemos en el poder de la conexión y el acompañamiento emocional. Nuestra misión
            es ofrecer un espacio seguro para que adolescentes puedan expresar sus emociones, hablar con especialistas y
            tener un plan de apoyo personalizado.
          </p>
          <p class="text-muted">
            Contamos con un equipo comprometido con tu bienestar, y una plataforma diseñada para escucharte, orientarte
            y ayudarte a crecer.
          </p>

          <!-- Valores / Características -->
          <!-- <h5 style="text-align: center; font-weight: bold;">Nuestor Valores:</h5>
          <div class="row mt-4">
            <div class="col-6">
              <p class="valores"><i class="bi bi-chat-heart-fill text-primary me-2"></i>- Empatía</p>
              <p class="valores"><i class="bi bi-shield-check text-success me-2"></i>- Confidencialidad</p>
            </div>
            <div class="col-6">
              <p class="valores"><i class="bi bi-stars text-warning me-2"></i>- Profesionalismo</p>
              <p class="valores"><i class="bi bi-people-fill text-info me-2"></i>- Apoyo Comunitario</p>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </section>

  <!-- SECCIÓN: VALORES -->
  <section class="py-5 bg-light">
    <div class="container">
      <h2 class="mb-4 text-center">Nuestros Valores</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card border-primary mb-3 shadow">
            <div class="card-body">
              <h5 class="card-title"><i class="bi bi-heart-fill text-danger me-2"></i>Empatía</h5>
              <p class="card-text">Nos ponemos en el lugar de cada usuario. Cada historia es única y merece respeto,
                escucha y comprensión.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card border-primary mb-3 shadow">
            <div class="card-body">
              <h5 class="card-title"><i class="bi bi-universal-access text-primary me-2"></i>Accesibilidad</h5>
              <p class="card-text">El cuidado de la salud mental debe estar al alcance de todos, sin importar edad o
                experiencia tecnológica.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card border-primary mb-3 shadow">
            <div class="card-body">
              <h5 class="card-title"><i class="bi bi-shield-lock-fill text-success me-2"></i>Confianza</h5>
              <p class="card-text">Priorizamos la seguridad, la privacidad y la veracidad de la información que
                compartimos.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card border-primary mb-3 shadow">
            <div class="card-body">
              <h5 class="card-title"><i class="bi bi-lightbulb-fill text-warning me-2"></i>Innovación con sentido</h5>
              <p class="card-text">Usamos la tecnología no solo para crear funciones, sino para construir soluciones que
                realmente ayudan.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card border-primary mb-3 shadow">
            <div class="card-body">
              <h5 class="card-title"><i class="bi bi-ear-fill text-info me-2"></i>Escucha activa</h5>
              <p class="card-text">La plataforma mejora constantemente gracias a lo que nuestros usuarios y
                especialistas comparten.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
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

<?php include("includes/footer.php"); ?>

</html>