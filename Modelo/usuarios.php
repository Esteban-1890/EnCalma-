<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="../Css/style.css">
<?php

class Usuarios
{
    private $id;
    private $nombre;
    private $apellidos;
    private $num_tel;
    private $correo_e;
    private $contrasena;

    private $contrasena_repeat;


    public function inicializar($nombre, $apellidos, $num_tel, $correo_e, $contrasena, $contrasena_repeat)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->num_tel = $num_tel;
        $this->correo_e = $correo_e;
        $this->contrasena = $contrasena;
        $this->contrasena_repeat = $contrasena_repeat;
    }

    public function conectarBd()
    {
        $con = mysqli_connect("localhost", "root", "", "encalma") or die("Problemas con la conexion a la base de datos");
        return $con;
    }

    public function ingresarUsuario()
    {
        $registrar = mysqli_query($this->conectarBd(), "SELECT * FROM usuarios WHERE correo_e = '$this->correo_e'") or die(mysqli_error($this->conectarBd()));
        if ($reg = mysqli_fetch_array($registrar)) {
            echo '<a href="../Vista/panelAdmin.php"><i class="fa-solid fa-arrow-left-long"></i></a><br><br>';
            echo "Usuario registrado anteriormente";
        } else {

            $usuarios = mysqli_query($this->conectarBd(), "INSERT INTO usuarios(nombre, apellidos, num_tel, correo_e, contrasena, contrasena_repeat) 
        VALUES ('$this->nombre', '$this->apellidos', '$this->num_tel', '$this->correo_e', '$this->contrasena', '$this->contrasena_repeat' )") or die("Problemas al insertar" . mysqli_error($this->conectarBd()));
            echo '<script type="text/javascript">
        alert("Bienevenido");
        window.location.href="../Index.php";
        </script>';
        }
    }

    public function listarUsuarios()
    {
        $registrar = mysqli_query($this->conectarBd(), "SELECT * FROM usuarios") or die(mysqli_error($this->conectarBd()));
        echo "<div  class='tablas-admin'><table class='styled-table'>";
        echo "<tr><th>Codigo</th><th>Nombre</th><th>Apellidos</th><th>Número de teléfono</th><th>Correo Electronico</th><th>Contraseña</th><th>Acciones</th></tr>";
        while ($reg = mysqli_fetch_array($registrar)) {
            echo '<tr><td>' . $reg[0] . '</td>';
            echo '<td>' . $reg[1] . '</td>';
            echo '<td>' . $reg[2] . '</td>';
            echo '<td>' . $reg[3] . '</td>';
            echo '<td>' . $reg[4] . '</td>';
            echo '<td>' . $reg[5] . '</td>';
            echo '<td><form action="../Control/ctrlUsuario.php?id=' . $reg[0] . '" method="post"  class="boton-nav"  onsubmit="return confirmarEliminacion(' . $reg[0] . ')">
            <input type="hidden" name="opcion" value="4">
            <button><i class="fa-solid fa-trash"></i></button>
          </form><br>
          <form action="../Control/ctrlUsuario.php?correo_e=' . $reg[4] . '" method="post"  class="boton-nav">
            <input type="hidden" name="opcion" value="5">
            <button><i class="fa-solid fa-pen-to-square"></i></button>              
          </form><br>
            </td>';
            echo '<script>
            function confirmarEliminacion(id) {
            return confirm("¿Estás seguro de eliminar al usuario con ID " + id + "? Esta acción no se puede deshacer.");
            }
            </script>';
        }
        echo '</table></div>';
    }

    public function consultarUsuarios($correo_e)
    {
        $registrar = mysqli_query($this->conectarBd(), "SELECT * FROM usuarios WHERE correo_e = '$correo_e'")
            or die(mysqli_error($this->conectarBd()));
            echo "<div  class='tablas-admin'><table class='styled-table'>";
            echo "<tr><th>Codigo</th><th>Nombre</th><th>Apellidos</th><th>Número de teléfono</th><th>Correo Electronico</th><th>Contraseña</th><th>Acciones</th></tr>";
        if ($reg = mysqli_fetch_array($registrar)) {
            echo '<tr><td>' . $reg[0] . '</td>';
            echo '<td>' . $reg[1] . '</td>';
            echo '<td>' . $reg[2] . '</td>';
            echo '<td>' . $reg[3] . '</td>';
            echo '<td>' . $reg[4] . '</td>';
            echo '<td>' . $reg[5] . '</td>';
             echo '<td><form action="../Control/ctrlUsuario.php?id=' . $reg[0] . '" method="post"  class="boton-nav"  onsubmit="return confirmarEliminacion(' . $reg[0] . ')">
            <input type="hidden" name="opcion" value="4">
            <button><i class="fa-solid fa-trash"></i></button>
          </form><br>
          <form action="../Control/ctrlUsuario.php?correo_e=' . $reg[4] . '" method="post"  class="boton-nav">
            <input type="hidden" name="opcion" value="5">
            <button><i class="fa-solid fa-pen-to-square"></i></button>              
          </form><br>
            </td>';
            echo '<script>
function confirmarEliminacion(id) {
    return confirm("¿Estás seguro de eliminar al usuario con ID " + id + "? Esta acción no se puede deshacer.");
}
</script>';
            echo '</table></div>';
        } else {
            echo "El usuario que consultaste no existe";
        }

    }

    public function eliminarUsuario($id)
    {
        $registrar = mysqli_query($this->conectarBd(), "SELECT * FROM usuarios WHERE id = '$id'")
            or die(mysqli_error($this->conectarBd()));
        if ($reg = mysqli_fetch_array($registrar)) {


            $eliminar = mysqli_query($this->conectarBd(), "DELETE FROM usuarios WHERE id = '$id'")
                or die(mysqli_error($this->conectarBd()));
            if ($eliminar) {

                echo '<script type="text/javascript">
            alert("Usuario eliminado correctamente.");
            window.location.href="../Vista/panelAdmin.php";
            </script>';
            } else {
                echo "Error al eliminar el usuario.";
            }

        } else {
            echo 'El id del usuario no existe';
        }
    }

    public function modificarUsuario($correo_e){
        $registrar = mysqli_query($this->conectarBd(), "SELECT * FROM usuarios WHERE correo_e = '$correo_e' ")
            or die(mysqli_error($this->conectarBd()));
        if ($reg = mysqli_fetch_array($registrar)) {
            echo "<form action='../Control/ctrlUsuario.php' method='post' class='form-container'>
            Id del Usuario:
            <input type='number' name='id' value='" . $reg[0] . "' readonly>
            Ingrese el nuevo nombre:
            <input type='text' name='nombrenuevo' value='" . $reg[1] . "'>
            <input type='hidden' name='nombreviejo' value='" . $reg[1] . "'>
            Ingrese los nuevos apellidos:
            <input type='text' name='apellidosnuevos' value='" . $reg[2] . "'>
            <input type='hidden' name='apellidosviejos' value='" . $reg[2] . "'>
            Ingrese el nuevo número:
            <input type='number' name='numeronuevo' value='" . $reg[3] . "'>
            <input type='hidden' name='numeroviejo' value='" . $reg[3] . "'>
            Ingrese el nuevo correo:
            <input type='email' name='correo_enuevo' value='" . $reg[4] . "'>
            <br>
            <input type='hidden' name='correo_eviejo' value='" . $reg[4] . "'>
            <br>
            <input type='hidden' name='contrasenavieja' value='" . $reg[5] . "'>
            <br>
            
            <input type='hidden' name='opcion' value='6'>
            <br><input type='submit' value='Modificar'>
           <a href = '../Index.php'> <input type='submit' value='Cancelar'></a>
            </form>";
        } else {

            echo 'No existe alumno con dicho correo';
        }
    }

    public function actualizarAlumno($id, $nombrenuevo, $apellidosnuevos, $numeronuevo, $numeroviejo, $correo_enuevo)
    {
        $registrar = mysqli_query($this->conectarBd(), "SELECT * FROM usuarios WHERE num_tel = $numeronuevo")
            or die(mysqli_error($this->conectarBd()));
        if ($reg = mysqli_fetch_array($registrar)) {
            echo "Número almacenado anteriormente";
        } else {
            $registrar = mysqli_query($this->conectarBD(), "UPDATE usuarios set id = $id, nombre = '$nombrenuevo',apellidos = '$apellidosnuevos', num_tel = '$numeronuevo', correo_e = '$correo_enuevo'
            where num_tel = '$numeroviejo'") or die(mysqli_error($this->conectarBD()));
            echo '<script type="text/javascript">
            alert("Usuario modificado correctamente.");
            window.location.href="../Vista/panelAdmin.php";
            </script>';
        }
    }

    public function iniciarSesion($correo, $contrasena)
    {
        session_start();
        $consulta = mysqli_query($this->conectarBd(), "SELECT * FROM usuarios WHERE correo_e = '$correo' AND contrasena = '$contrasena'")
            or die(mysqli_error($this->conectarBd()));

        if ($reg = mysqli_fetch_array($consulta)) {
            $_SESSION['id'] = $reg['id'];
            $_SESSION['nombre'] = $reg['nombre'];
            $_SESSION['apellidos'] = $reg['apellidos'];
            $_SESSION['telefono'] = $reg['num_tel'];
            $_SESSION['correo'] = $reg['correo_e'];
            $_SESSION['nomusuario'] = $reg['nombre'] . ' ' . $reg['apellidos'];

            echo '<script type="text/javascript">
            // alert("Inicio de sesión exitoso. Bienvenido ' . $reg['nombre'] . '");
            window.location.href="../Perfil.php";
        </script>';
        } else {
            echo '<script type="text/javascript">
            alert("Correo o contraseña incorrectos.");
            window.history.back();
        </script>';
        }
    }




}


?>