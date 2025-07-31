<!DOCTYPE html>
<html lang="es">

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
  <link rel="icon" href="Imagenes/Logo_encalma.jpg" type="icon">
  <link rel="stylesheet" href="Css/Styles_login.css">
  <title>Planes</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
          <!-- <?php
session_start();

if ($_POST) {

  include("./bd.php");

  $sentencia = $conexion->prepare("SELECT *, count(*) as n_usuarios FROM `empleados`
    WHERE nomusuario=:nomusuario
    AND contrasena=:contrasena");

  $nomusuario = $_POST["nomusuario"];
  $contrasena = $_POST["contrasena"];
  $sentencia->bindParam(":nomusuario", $nomusuario);
  $sentencia->bindParam(":contrasena", $contrasena);

  $sentencia->execute();
  $registro = $sentencia->fetch(PDO::FETCH_LAZY);

  if ($registro["n_usuarios"] > 0) {
    $_SESSION['nomusuario'] = $registro["nomusuario"];
    $_SESSION['logueado'] = true;

    // Verificar el rol del usuario y redirigir según el rol
    if ($registro['rol'] == 'Gerente') {
      header("Location:gestionGer.php"); // Redirige a la gestión de empleados
    } elseif ($registro['rol'] == 'Empleado') {
      header("Location: gestion.php"); // Redirige a la gestión de películas y géneros
    } else {
      // Puedes manejar otras opciones aquí
      echo '<script type="text/javascript"> alert ("Rol no reconocido"); </scrip>';
    }
  } else {
    echo '<script type="text/javascript"> alert("Usuario o contraseña incorrecto"); </script>';
  }
}
?> -->


          <main>
            <section class="sec-inicio">
              <div class="contenedor">
                <div class="formulario">
                  <form action="" method="post">
                    <h2>Iniciar Sesión</h2>

                    <div class="input-contenedor">
                      <i class="fa-regular fa-user"></i>
                      <input type="text" name="nomusuario" id="nomusuario" aria-describedby="helpId" pattern=".{5,20}"
                        required>
                      <label for="nomusuario" class="form-label"> Correo </label>
                    </div>

                    <div class="input-contenedor">
                      <i id="togglePassword" class="fa-solid fa-eye"></i>
                      <input type="password" name="contrasena" id="contrasena" aria-describedby="helpId"
                        pattern=".{8,15}" required>
                      <label for="contrasena" class="form-label"> Contraseña </label>
                    </div>

                    <div>
                      <button type="submit" class="boton-sesion" style="border-radius: 40px;"
                        onclick="MsgCaracteres()">Acceder</button>
                    </div>
                    <br>

                    <a href="Registro.html">
                      <button type="button" class="btn btn-dark boton-sesion"
                        style="border-radius: 40px; color: #ffffff; background-color: black;">Registrarse</button> <br>
                      <br>
                    </a>

                    <!-- <div class="olvidar">
            <label for="#">
              <a href="#">Olvidé la contraseña</a>
            </label>
          </div> -->

                  </form>
                </div>
              </div>
            </section>
          </main>

          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
            </script>

          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
            integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
            </script>

          <script>
            document.addEventListener('DOMContentLoaded', function () {
              const togglePassword = document.getElementById('togglePassword');
              const password = document.getElementById('contrasena');

              togglePassword.addEventListener('click', function () {
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);

                
                togglePassword.classList.toggle('fa-eye');
                togglePassword.classList.toggle('fa-eye-slash');
              });
            });
          </script>
        </div>

      </div>
    </div>
  </div>
  <!--carrucel-->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img
          src="https://images.unsplash.com/photo-1491439833076-514a03b24a15?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
          class="d-block w-100 img-fluid" style="max-height: 700px; " alt="...">
        <div class="carousel-caption d-none d-md-block text-white fs-10">
          <h3>¡Somos el alivio a tu ansiedad!</h3>
          <a href="iniciar_sesion.html"><button type="button" class="btn text-black"
              style="background-color: #A8DADC; font-weight: bold;">Empezar ahora</button></a>
        </div>
      </div>
      <div class="carousel-item">
        <img
          src="https://images.unsplash.com/photo-1592966554798-bdc154f077d5?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
          class="d-block w-100 img-fluid" style="max-height: 700px; " alt="...">
        <div class="carousel-caption d-none d-md-block text-white fs-10" style="font-weight: bold;">
          <h4>Contamos con las mejores opciones para tu seguimiento</h4>
          <a href="iniciar_sesion.html"><button type="button" class="btn text-black"
              style="background-color: #A8DADC; font-weight: bold;"> Empezar ahora</button></a>
        </div>
      </div>
      <div class="carousel-item">
        <img
          src="https://images.unsplash.com/photo-1714976694867-bc0e012fab70?q=80&w=1032&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
          class="d-block w-100 img-fluid" style="max-height: 700px; " alt="...">
        <div class="carousel-caption d-none d-md-block text-white fs-10" style="font-weight: bold;">
          <h4>Te acompañamos en todo tu proceso</h4>
          <a href="iniciar_sesion.html"><button type="button" class="btn text-black"
              style="background-color: #A8DADC; font-weight: bold;">Empezar ahora</button></a>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="custom-arrow" aria-hidden="true">&#10094;</span>
      <span class="visually-hidden">Anterior</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="custom-arrow" aria-hidden="true">&#10095;</span>
      <span class="visually-hidden">Siguiente</span>
    </button>

  </div>
  <!-- Texto introductorio de planes -->
  <h4 class="title-basic text-center mt-3" style="font-weight: bold;"> ¡Disfruta de los distintos planes que tenemos para ti! </h4>
  <div class="texto-planes">
    <p>Nos adaptamos a tus necediades y te ayudamos a controlar la ansiedad de una mejor
      manera, con ayuda profesional y de seguimiento día a día para que sigas persiguiendo tus objetivos
      sin nada que te detenga
    </p>
    <hr class="line-plan">
  </div>
  <!-- Sección de css Grid -->
  <div class="container text-center">
    <div class="row align-items-start">
      <!-- Sección plan 1 -->
      <div class="col">
        <div class="plan-basic">
          <h4 class="title-basic" style="font-weight: bold;">  
            Plan Básico
          </h4>
          <h5>$150 MX <br>
            Usuario/Mes
          </h5>
          <button type="button" class="btn" style="background-color: #A8DADC; margin: 30px 0 ;">Elegir plan</button>
          <!-- Seccion inicial del check -->
          <div class="sec-check">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="checkIndeterminateDisabled" checked>
              <label class="form-check-label" for="checkIndeterminateDisabled">
                Acceso a artículos y guías calmantes
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="checkDisabled" checked>
              <label class="form-check-label" for="checkDisabled">
                1 ejercicio de respiración guiada semanal
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="checkDisabled" checked>
              <label class="form-check-label" for="checkDisabled">
                Frases motivacionales diarias
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="checkDisabled" checked>
              <label class="form-check-label" for="checkDisabled">
                Registro personal de emociones
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="checkCheckedDisabled"
                style="border: 3px solid  #457B9D;" disabled>
              <label class="form-check-label" for="checkCheckedDisabled">
                Seguimiento mensual con especialista
              </label>
            </div>
          </div>
          <p class="final-check">Enfocado en crear una rutina de bienestar sin presión.</p>
          <!-- Seccion final del check -->
        </div>
      </div>

      <!-- Sección 2 plan 2 -->
      <div class="col">
        <div class="plan-basic">
          <h4 class="title-basic" style="font-weight: bold;">
            Plan Intermedio
          </h4>
          <h5>$250 MX <br>
            Usuario/Mes
          </h5>
          <button type="button" class="btn" style="background-color: #A8DADC; margin: 30px 0 ;">Elegir plan</button>
          <!-- Seccion inicial del check -->
          <div class="sec-check">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="checkIndeterminateDisabled" checked>
              <label class="form-check-label" for="checkIndeterminateDisabled">
                Todo lo del plan básico
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="checkDisabled" checked>
              <label class="form-check-label" for="checkDisabled">
                3 ejercicios semanales (meditación, journaling, respiración)
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="checkDisabled" checked>
              <label class="form-check-label" for="checkDisabled">
                Seguimiento mensual con especialista
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="checkDisabled" checked>
              <label class="form-check-label" for="checkDisabled">
                Acceso a mini-cursos sobre manejo de ansiedad
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="checkCheckedDisabled"
                style="border: 3px solid  #457B9D;" disabled>
              <label class="form-check-label" for="checkCheckedDisabled">
                Disabled checked checkbox
              </label>
            </div>
          </div>
          <!-- Seccion final del check -->
          <p class="final-check" style="padding-bottom: 2px;">Diseñado para crear progreso emocional sostenido.</p>
        </div>
      </div>

      <!-- Plan 3 sección -->

      <div class="col">
        <div class="plan-basic">
          <h4 class="title-basic" style="font-weight: bold;">
            Plan premium
          </h4>
          <h5>$320 MX <br>
            Usuario/Mes
          </h5>
          <button type="button" class="btn" style="background-color: #A8DADC; margin: 30px 0 ;">Elegir plan</button>
          <!-- Seccion inicial del check -->
          <div class="sec-check">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="checkIndeterminateDisabled" checked>
              <label class="form-check-label" for="checkIndeterminateDisabled">
                Los dos planes anteriores
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="checkDisabled" checked>
              <label class="form-check-label" for="checkDisabled">
                Sesiones quincenales en línea con terapeuta o coach
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="checkDisabled" checked>
              <label class="form-check-label" for="checkDisabled">
                Comunidad privada de apoyo
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="checkDisabled" checked>
              <label class="form-check-label" for="checkDisabled">
                Ejercicios personalizados
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="checkDisabled" checked>
              <label class="form-check-label" for="checkDisabled">
                Acceso a mejores recomendaciones
              </label>
            </div>
          </div>
          
          <p class="final-check" style="padding-top: 50px;"> Un plan completo para avanzar con confianza.</p>
        </div>
      </div>

    </div>
  </div>
  <script>
  document.addEventListener("DOMContentLoaded", function () {
    const toggleButton = document.getElementById("darkModeToggle");
    const icon = document.getElementById("darkModeIcon");

    
    if (localStorage.getItem("darkMode") === "true") {
      document.body.classList.add("bg-dark", "text-white");
      icon.classList.remove("fa-moon");
      icon.classList.add("fa-sun");
    }

    toggleButton.addEventListener("click", function () {
      const isDark = document.body.classList.toggle("bg-dark");
      document.body.classList.toggle("text-white", isDark);

      
      if (isDark) {
        icon.classList.remove("fa-moon");
        icon.classList.add("fa-sun");
      } else {
        icon.classList.remove("fa-sun");
        icon.classList.add("fa-moon");
      }

      
      localStorage.setItem("darkMode", isDark);
    });
  });
</script>


<button id="darkModeToggle" class="btn btn-light position-fixed" style="bottom: 20px; right: 20px; z-index: 1050;">
  <i id="darkModeIcon" class="fas fa-moon"></i>
</button>
</body>

<?php include("includes/footer.php"); ?>

</html>