<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/js/bootstrap.js">
    <link rel="stylesheet" href="../Css/style.css">
    <link rel="stylesheet" href="../Css/StyleRegistro.css">
    <title>Registro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<?php include("../includesVista/header.php") ?>

<body>
    <div class="container" style="margin: 30px auto ">
        <div class="form-box">
            <div class="form-header">
                <h2>Registrar Usuario</h2>
                <div class="lock-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                        class="bi bi-person-fill-add" viewBox="0 0 16 16">
                        <path
                            d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path
                            d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4" />
                    </svg>
                </div>
            </div>

            <form action="../Control/ctrlEspecialistas.php" method="post" class="form-body" onsubmit="return validarFormulario();">
                <input type="text" name="nombre" placeholder="Nombre" required />
                <input type="text" name="apellidos" placeholder="Apellidos" required />
                <input type="email" name="email" placeholder="Correo electrónico" required />
                <input type="tel" name="tel" placeholder="Teléfono" required />
                <input type="tel" name="tel_referencia" placeholder="Teléfono de referencia" required />
                <!-- <div class="input-password">
                    <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña" required />
                    <i class="fa-solid fa-eye" id="togglePassword1"></i>
                </div>

                <div class="input-password">
                    <input type="password" id="contrasena_repeat" name="contrasena_repeat" placeholder="Confirmar contraseña" required />
                    <i class="fa-solid fa-eye" id="togglePassword2"></i>
                </div> -->

                <input type="hidden" name="opcion" value="1" />
                <button type="submit">REGISTRAR</button>
                <br>
                
                <button type="button" onclick="location.href='panelEspecialista.php'">REGRESAR</button>
            </form>

        </div>
    </div>

    
    <script>
        function validarFormulario() {
            const contrasena = document.getElementById("contrasena").value;
            const repetir = document.getElementById("contrasena_repeat").value;

            const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/;

            if (contrasena !== repetir) {
                alert("Las contraseñas no coinciden.");
                return false;
            }

            if (!regex.test(contrasena)) {
                alert("La contraseña debe tener al menos 8 caracteres, una mayúscula, una minúscula y un número.");
                return false;
            }

            return true;
        }

        document.getElementById("togglePassword1").addEventListener("click", function () {
            const input = document.getElementById("contrasena");
            const icon = this;
            if (input.type === "password") {
                input.type = "text";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            } else {
                input.type = "password";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            }
        });

        document.getElementById("togglePassword2").addEventListener("click", function () {
            const input = document.getElementById("contrasena_repeat");
            const icon = this;
            if (input.type === "password") {
                input.type = "text";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            } else {
                input.type = "password";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            }
        });
    </script>

   <?php
   include("../includes/footer.php");
   ?>

</body>

</html>