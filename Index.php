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
    <link rel="icon" href="Imagenes/Logo_encalma.jpg" type="icon" style="border-radius: 20px;">
    <link rel="stylesheet" href="Css/Styles_login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>EnCalma</title>
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
                <img src="https://images.unsplash.com/photo-1491439833076-514a03b24a15?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="d-block w-100 img-fluid" style="max-height: 700px; " alt="...">
                <div class="carousel-caption d-none d-md-block text-white fs-10">
                    <h3>¡Somos el alivio a tu ansiedad!</h3>
                    <a href="iniciar_sesion.html"><button type="button" class="btn text-black"
                            style="background-color: #A8DADC; font-weight: bold;">Empezar ahora</button></a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1592966554798-bdc154f077d5?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="d-block w-100 img-fluid" style="max-height: 700px; " alt="...">
                <div class="carousel-caption d-none d-md-block text-white fs-10" style="font-weight: bold;">
                    <h4>Contamos con las mejores opciones para tu seguimiento</h4>
                    <a href="iniciar_sesion.html"><button type="button" class="btn text-black"
                            style="background-color: #A8DADC; font-weight: bold;"> Empezar ahora</button></a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1714976694867-bc0e012fab70?q=80&w=1032&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="d-block w-100 img-fluid" style="max-height: 700px; " alt="...">
                <div class="carousel-caption d-none d-md-block text-white fs-10" style="font-weight: bold;">
                    <h4>Te acompañamos en todo tu proceso</h4>
                    <a href="iniciar_sesion.html"><button type="button" class="btn text-black"
                            style="background-color: #A8DADC; font-weight: bold;">Empezar ahora</button></a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="custom-arrow" aria-hidden="true">&#10094;</span>
            <span class="visually-hidden">Anterior</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="custom-arrow" aria-hidden="true">&#10095;</span>
            <span class="visually-hidden">Siguiente</span>
        </button>

    </div>
    
    <!-- Sección pequeña información -->
    <div class="container mb-5" id="container_info">
        <div class="row text-center">
            <div class="col-12 col-md-6">
                <img src="Imagenes/Banner1.jpg" alt="Imagen de videojuegos" class="img-fluid" id="img_info">
            </div>
            <div class="col-12 col-md-6 sec-info">
                <p class="info_general" style="justify-content: center; text-align: justify; padding: 0 20px 0 20px;">En
                    <strong>EnCalma</strong>, entendemos que vivir con ansiedad no es fácil. Por eso, hemos creado un
                    entorno seguro
                    y amigable donde puedes encontrar información, herramientas, ejercicios, y acompañamiento emocional
                    que te ayuden
                    a recuperar la calma.
                    Nuestro objetivo es que te sientas comprendido, escuchado y acompañado en cada paso de tu proceso.
                </p>
            </div>
        </div>
    </div>

    <!-- ¿Qué puedes encontrar? -->
    <p class="h2 text-center mt-5 mb-4">¿Qué puedes encontrar?</p>
    <div class="container mb-5">
        <div class="row justify-content-center g-10" style="gap: 80px;">
            <!-- Card 1 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1592839961631-0351c10a0b47?q=80&w=332&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="card-img-top" alt="Blog">
                    <div class="card-body">
                        <h5 class="card-title w-200" style="font-weight: bold; text-align: center;">Información del blog
                        </h5>
                        <p class="card-text " style="text-align: justify;">En la sección del blog encontrarás
                            información inspirada en la ansiedad que
                            te ayudará a conocer más sobre la ansiedad, así como consejos y recomendaciones para un
                            mejor control.</p>
                        <a href="#" class="btn text-black" style="background-color: #A8DADC; font-weight: bolder;">Saber
                            más</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100">
                    <img src="https://images.pexels.com/photos/5368974/pexels-photo-5368974.jpeg" class="card-img-top"
                        alt="Actividades">
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: bold; text-align: center;">Actividades para la
                            ansiedad</h5>
                        <p class="card-text" style="text-align: justify;">En esta sección encontrarás actividades
                            planificadas por especialistas
                            que te ayudarán a controlar momentos de ansiedad del día a día.</p>
                        <a href="#" class="btn text-black"
                            style="background-color: #A8DADC; font-weight: bold; margin-top: 20px;">Saber
                            más</a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100">
                    <img src="https://plus.unsplash.com/premium_photo-1661766915961-64b5380e6a3e?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8QXl1ZGElMjBwcm9mZXNpb25hbHxlbnwwfHwwfHx8MA%3D%3D"
                        class="card-img-top" alt="Ayuda Profesional">
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: bold; text-align: center;">Ayuda profesional</h5>
                        <p class="card-text" style="text-align: justify;">En esta sección encontrarás ayuda
                            especializada por profesionales que te guiarán a mejorar los
                            casos de ansiedad, con planes, medios de contacto y apoyo cuando lo necesites.</p>
                        <a href="#" class="btn text-black"
                            style="background-color: #A8DADC; font-weight: bold; margin-top: 20px;">Saber
                            más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>




    </button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Action two</a></li>
        <li><a class="dropdown-item" href="#">Action three</a></li>
    </ul>
    </div>

    <!-- Preguntas frecuentes -->
    <div class="accordion accordion-flush" id="accordionFlushExample" style="margin: 10px 80px">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    ¿Como mejoran las personas con este sitio web?
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Los usuarios han entrado controlar la ansiedad llevan un avance en sus
                    historiales, con cada actividad de apoyo y </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    ¿Puedo cancelar los planes en el tiempo que sea?
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                    <code>.accordion-flush</code> class. This is the second item’s accordion body. Let’s imagine this
                    being filled with some actual content.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    ¿Como puedo contartar a profesionales?
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                    <code>.accordion-flush</code> class. This is the third item’s accordion body. Nothing more exciting
                    happening here in terms of content, but just filling up the space to make it look, at least at first
                    glance, a bit more representative of how this would look in a real-world application.
                </div>
            </div>
        </div>
    </div>
    <!-- Footer  -->
    <?php
    include("includes/footer.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        const links = document.querySelectorAll('.nav-link');
        links.forEach(link => {
            link.addEventListener('click', () => {
                links.forEach(l => l.classList.remove('active'));
                link.classList.add('active');
            });
        });
    </script>
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