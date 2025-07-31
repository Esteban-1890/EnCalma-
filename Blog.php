<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Blog - EnCalma</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="Css/style.css" />
  <link rel="stylesheet" href="Css/styleBlog.css" />
  <link rel="icon" href="Imagenes/Logo_encalma.jpg" type="icon" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<!-- Header -->
<?php include("includes/header.php") ?>

<body style="background-color: #f5f5f5">

  <!-- Encabezado con imagen de fondo -->
  <section class="section-encabezado">
    <h1>Blog</h1>
  </section>

  <!-- Sección de tarjetas -->
  <div class="container contenedor-blog py-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">

      <!-- Tarjeta 1 -->
      <div class="col">
        <div class="card h-100">
          <img src="https://cdn.pixabay.com/photo/2022/10/07/18/02/horror-7505608_1280.jpg" class="card-img-top"
            alt="Imagen 1" />
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">¿Qué es la ansiedad?</h5>
            <p class="card-text">La ansiedad es una reacción emocional que todos experimentamos ante situaciones que
              percibimos como amenazantes o estresantes... </p>
            <button type="button" class="btn btn-primary mt-auto" data-bs-toggle="modal" data-bs-target="#modal1">
              Leer más
            </button>
          </div>
        </div>
      </div>

      <!-- Tarjeta 2 -->
      <div class="col">
        <div class="card h-100">
          <img
            src="https://plus.unsplash.com/premium_photo-1689177356594-b988a1cc45ff?q=80&w=1032&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            class="card-img-top" alt="Imagen 2" />
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Causas de la ansiedad</h5>
            <p class="card-text">Las causas pueden variar entre personas, pero algunas de las más comunes ... </p>
            <button type="button" class="btn btn-primary mt-auto" data-bs-toggle="modal" data-bs-target="#modal2">
              Leer más
            </button>
          </div>
        </div>
      </div>

      <!-- Tarjeta 3 -->
      <div class="col">
        <div class="card h-100">
          <img
            src="https://images.unsplash.com/photo-1603572298498-848f70a46d29?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            class="card-img-top" alt="Imagen 3" />
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">¿Cómo mejorar mi autoestima?</h5>
            <p class="card-text">La autoestima es la forma en que te percibes a ti mismo. Si tienes ansiedad, es común
              que te critiques mucho o... </p>
            <button type="button" class="btn btn-primary mt-auto" data-bs-toggle="modal" data-bs-target="#modal3">
              Leer más
            </button>
          </div>
        </div>
      </div>

      <!-- Tarjeta 4 -->
      <div class="col">
        <div class="card h-100">
          <img
            src="https://images.unsplash.com/photo-1533777857889-4be7c70b33f7?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            class="card-img-top" alt="Imagen 4" />
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Alimentos que ayudan a reducir la ansiedad</h5>
            <p class="card-text">Una buena alimentación puede influir directamente en tu estado de ánimo. Algunos
              nutrientes ayudan a ... </p>
            <button type="button" class="btn btn-primary mt-auto" data-bs-toggle="modal" data-bs-target="#modal4">
              Leer más
            </button>
          </div>
        </div>
      </div>

      <!-- Tarjeta 5 -->
      <div class="col">
        <div class="card h-100">
          <img
            src="https://plus.unsplash.com/premium_photo-1681487769650-a0c3fbaed85a?q=80&w=955&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            class="card-img-top" alt="Imagen 5" />
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Personas con ansiedad y cifras actuales</h5>
            <p class="card-text">La ansiedad es más común de lo que parece. No estás solo(a). Según ... </p>
            <button type="button" class="btn btn-primary mt-auto" data-bs-toggle="modal" data-bs-target="#modal5">
              Leer más
            </button>
          </div>
        </div>
      </div>

      <!-- Tarjeta 6 -->
      <div class="col">
        <div class="card h-100">
          <img src="https://cdn.pixabay.com/photo/2017/06/27/11/48/team-spirit-2447163_960_720.jpg" class="card-img-top"
            alt="Imagen 6" />
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Fundaciones y organizaciones de apoyo</h5>
            <p class="card-text">Hay muchas instituciones que ofrecen ayuda gratuita o de bajo costo... </p>
            <button type="button" class="btn btn-primary mt-auto" data-bs-toggle="modal" data-bs-target="#modal6">
              Leer más
            </button>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Modales individuales -->

  <!-- Modal 1 -->
  <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modal1Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal1Label">¿Qué es la ansiedad?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <img src="https://cdn.pixabay.com/photo/2022/10/07/18/02/horror-7505608_1280.jpg" alt="Ansiedad" class="modal-img />
         <p style=" text-align: justify;">La ansiedad es una reacción emocional que todos experimentamos ante
          situaciones que percibimos como amenazantes o estresantes. En pequeñas dosis, puede ser útil porque nos
          mantiene alertas y listos para actuar. Sin embargo, cuando la ansiedad aparece de forma frecuente, intensa o
          sin una causa aparente, puede convertirse en un trastorno.</p>
          <p>Entre los síntomas más comunes están:</p>
          <ul>
            <li>Pensamientos de preocupación constantes.</li>
            <li>Palpitaciones o sensación de que el corazón late muy rápido</li>
            <li>Dificultad para respirar.</li>
            <li>Tensión muscular.</li>
            <li>Dificultad para concentrarse o dormir.</li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2 -->
  <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="modal2Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal2Label">Causas de la ansiedad</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <img
            src="https://plus.unsplash.com/premium_photo-1689177356594-b988a1cc45ff?q=80&w=1032&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="Causas ansiedad" class="modal-img" />
          <p style="text-align: justify;">Las causas pueden variar entre personas, pero algunas de las más comunes
            incluyen:</p>
          <ul>
            <li>Factores genéticos: Si tienes familiares con trastornos de ansiedad, puedes tener mayor probabilidad de
              desarrollarla.</li>
            <li>Factores químicos en el cerebro: Desequilibrios en neurotransmisores como la serotonina o la dopamina.
            </li>
            <li>Factores externos como problemas laborales o familiares.</li>
            <li>Experiencias traumáticas: Accidentes, abuso, pérdidas o violencia.</li>
            <li>Problemas de salud física: Como enfermedades cardíacas, hipertiroidismo, etc.</li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 3 -->
  <div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="modal3Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal3Label">Cómo mejorar la autoestima</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <img
            src="https://images.unsplash.com/photo-1603572298498-848f70a46d29?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="Mejorar autoestima" class="modal-img" />
          <p style="text-align: justify;">La autoestima es la forma en que te percibes a ti mismo. Si tienes ansiedad,
            es común que te critiques mucho o sientas que no eres suficiente. Mejorar la autoestima puede ayudarte a
            sentirte más seguro y menos vulnerable ante los pensamientos negativos.</p>
          <p>Consejos para fortalecerla:</p>
          <ul>
            <li>Reconoce tus logros, por pequeños que sean.</li>
            <li>Evita compararte con otros.</li>
            <li>Practica el autocuidado y pensamientos positivos.</li>
            <li>Haz una lista de tus logros (aunque parezcan pequeños).</li>
            <li>Busca actividades que te hagan sentir capaz y útil.</li>
            <li>Acepta tus errores como parte del aprendizaje.</li>

          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 4 -->
  <div class="modal fade" id="modal4" tabindex="-1" aria-labelledby="modal4Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal4Label">Los mejores alimentos para la ansiedad</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <img
            src="https://images.unsplash.com/photo-1533777857889-4be7c70b33f7?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="Alimentos ansiedad" class="modal-img" />
          <p style="text-align: justify;">Una buena alimentación puede influir directamente en tu estado de ánimo.
            Algunos nutrientes ayudan a regular las funciones cerebrales y a reducir el estrés.</p>
          <p>Alimentos recomendados:</p>
          <ul>
            <li>Alimentos ricos en magnesio como nueces y semillas.</li>
            <li>Pescados con ácidos grasos omega-3.</li>
            <li>Frutas y verduras frescas y variadas.</li>
            <li>Chocolate amargo: en pequeñas cantidades, aumenta la serotonina.</li>
            <li>Té de manzanilla o valeriana: tienen efectos relajantes.</li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 5 -->
  <div class="modal fade" id="modal5" tabindex="-1" aria-labelledby="modal5Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal5Label">Gente con ansiedad</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <img
            src="https://plus.unsplash.com/premium_photo-1681487769650-a0c3fbaed85a?q=80&w=955&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="Gente con ansiedad" class="modal-img" />
          <p style="text-align: justify;">La ansiedad es más común de lo que parece. No estás solo(a). Según la
            Organización Mundial de la Salud:</p>
          <ul>
            <li>Más de 300 millones de personas en el mundo padecen algún tipo de trastorno de ansiedad.</li>
            <li>Es el trastorno de salud mental más común.</li>
            <li>Las mujeres son más propensas que los hombres a padecerlo.</li>
            <li>La mayoría de los casos no son diagnosticados ni tratados por miedo, estigma o desconocimiento.</li>

          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 6 -->
  <div class="modal fade" id="modal6" tabindex="-1" aria-labelledby="modal6Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal6Label">Fundación contra la ansiedad</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <img src="https://cdn.pixabay.com/photo/2017/06/27/11/48/team-spirit-2447163_960_720.jpg"
            alt="Fundación ansiedad" class="modal-img" />
          <p style="text-align: justify;">Hay muchas instituciones que ofrecen ayuda gratuita o de bajo costo para
            personas que viven con ansiedad:</p>
          <ul>
            <li>
              <strong>SAPTEL (Servicio de Apoyo Psicológico)</strong><br>
              📞 Tel: 800-472-7835 (Atención 24/7)<br>
              🌐 <a href="https://www.saptel.org.mx" target="_blank">https://www.saptel.org.mx</a>
            </li>

            <li>
              <strong>Fundación ANAR México</strong> (Niños, niñas y adolescentes)<br>
              🌐 <a href="https://www.anar.org/" target="_blank">https://www.anar.org</a>
            </li>

            <li>
              <strong>Línea de la Vida (Secretaría de Salud)</strong><br>
              Qué ofrece: Atención emocional por consumo de sustancias, ansiedad, crisis, pensamientos suicidas o
              violencia.<br>
              📞 Teléfono nacional: 800 911 2000<br>
              📱 WhatsApp: 55 8633 0000<br>
              🌐 <a href="https://www.gob.mx/lineadelavida" target="_blank">https://www.gob.mx/lineadelavida</a>
            </li>
          </ul>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
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

<!-- Footer -->
<?php include("includes/footer.php"); ?>

</html>