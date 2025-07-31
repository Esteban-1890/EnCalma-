<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CtrlRoles</title>
</head>

<body>
    <?php
    include("../Modelo/rol.php");
    $rol = new Rol();
    $rol->conectarBd();
    switch ($_REQUEST["opcion"]) {
        case '1':
            $usu->inicializar($_REQUEST['nombre'], $_REQUEST['apellidos'], $_REQUEST['num_tel'], $_REQUEST['correo_e'], $_REQUEST['contrasena'], $_REQUEST['contrasena_repeat']);
            $usu->ingresarUsuario();
        break;
        case '2':
            $rol->iniciarSesion($_REQUEST['email'], $_REQUEST['contrasena']);
        break;
        case '3':
            $usu->listarUsuarios();
        break;

        case '4':
            $usu->eliminarUsuario($_REQUEST['id']);
        break;
        case '5':
            $usu->modificarUsuario($_REQUEST['correo_e']);
        break;
        case '6':
            $usu->actualizarAlumno($_REQUEST['id'], $_REQUEST['nombrenuevo'], $_REQUEST['apellidosnuevos'], $_REQUEST['numeronuevo'], $_REQUEST['numeroviejo'], $_REQUEST['correo_enuevo']);
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