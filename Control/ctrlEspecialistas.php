<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CtrlEspecialista</title>
</head>

<body>
    <?php
    include("../Modelo/usuarioEspecialistas.php");
    $usu = new UsuarioEspecialistas();
    $usu->conectarBd();
    switch ($_REQUEST["opcion"]) {
        case '1':
            $usu->inicializar($_REQUEST['nombre'], $_REQUEST['apellidos'], $_REQUEST['email'], $_REQUEST['tel'], $_REQUEST['tel_referencia']);
            $usu->registrarUsuario();
        break;
        case '2':
            $usu->consultarUsuario($_REQUEST['email']);
        break;
        case '3':
            $usu->listarUsuarios();
        break;

        case '4':
            $usu->eliminarUsuario($_REQUEST['id']);
        break;
        case '5':
            $usu->modificarUsuario($_REQUEST['telefono']);
        break;
        case '6':
            $usu->actualizarUsuario($_REQUEST['nombrenuevo'], $_REQUEST['apellidosnuevos'], $_REQUEST['emailnuevo'], telefononuevo: $_REQUEST['telefononuevo'], telefonoviejo: $_REQUEST['telefonoviejo'], telefono_referencianuevo: $_REQUEST['telefono_referencianuevo']);
        break;
        case '7':
            $correo = $_REQUEST['correo_e'];
            $contrasena = $_REQUEST['contrasena'];
            $usu->iniciarSesion($correo, $contrasena);
        break;

    }

    ?>
</body>

</html>