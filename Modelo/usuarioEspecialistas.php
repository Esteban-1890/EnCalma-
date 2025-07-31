<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="../Css/style.css">
<?php
class UsuarioEspecialistas
{
    private $id;
    private $nombre;
    private $apellidos;
    private $email;
    private $tel;
    private $tel_referencia;

    
    public function inicializar( $nombre, $apellidos, $email, $tel, $tel_referencia)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->tel = $tel;
        $this->tel_referencia = $tel_referencia;
    }


    public function conectarBD()
    {
        $con = mysqli_connect("localhost", "root", "", "encalma") or die("Problemas con la conexion a la base de datos");
        return $con;
    }

    public function registrarUsuario()
    {
        $registrar = mysqli_query($this->conectarBD(), "SELECT * FROM usuariosespecialistas WHERE email = '$this->email'") or die(mysqli_error($this->conectarBD()));
        if ($reg = mysqli_fetch_array($registrar)) {
            echo '<a href="../Vista/panelAdmin.php"><i class="fa-solid fa-arrow-left-long"></i></a><br><br>';
            echo "Usuario registrado anteriormente";
        } else {
            $usuarios = mysqli_query($this->conectarBd(), "INSERT INTO usuariosespecialistas (nombre, apellidos, email, telefono, telefono_referencia) VALUES ('$this->nombre', '$this->apellidos', '$this->email', '$this->tel', '$this->tel_referencia')")
                or die("Problemas al insertar" . mysqli_error($this->conectarBD()));
            echo '<script type="text/javascript">
            alert("Nuevo usuario agregado");
            window.location.href="../Vista/panelEspecialista.php";
            </script>';
        }

    }
    public function listarUsuarios(){
        $listar = mysqli_query($this->conectarBd(),"SELECT * FROM usuariosespecialistas") or die(mysqli_error($this->conectarBd()));
        echo "<div  class='tablas-admin'><table class='styled-table'>";
        echo "<tr><th>Id</th><th>Nombre</th><th>Apellidos</th><th>Correo Electronico</th><th>Teléfono</th><th>Teléfono de referencia</th><th>Acciones</th></tr>";
        while($reg = mysqli_fetch_array($listar)) {
            echo '<tr><td>' . $reg[0] . '</td>';
            echo '<td>' . $reg[1] . '</td>';
            echo '<td>' . $reg[2] . '</td>';
            echo '<td>' . $reg[3] . '</td>';
            echo '<td>' . $reg[4] . '</td>';
            echo '<td>' . $reg[5] . '</td>';
            echo '<td><form action="../Control/ctrlEspecialistas.php?id=' . $reg[0] . '" method="post"  class="boton-nav"  onsubmit="return confirmarEliminacion(' . $reg[0] . ')">
            <input type="hidden" name="opcion" value="4">
            <button><i class="fa-solid fa-trash"></i></button>
          </form><br>
          <form action="../Control/ctrlEspecialistas.php?telefono=' . $reg[4] . '" method="post"  class="boton-nav">
            <input type="hidden" name="opcion" value="5">
            <button><i class="fa-solid fa-pen-to-square"></i></button>              
          </form><br>
          <form action="../Control/ctrlUsuario.php?correo_e=' . $reg[4] . '" method="post"  class="boton-nav">
            <input type="hidden" name="opcion" value="8">
            <button class="btn btn-success"><i class="fa-solid fa-calendar-plus"></i></button>
              
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
    public function consultarUsuario($email){
        $consulta = mysqli_query($this->conectarBd(),"SELECT * FROM usuariosespecialistas WHERE email = '$email'")
        or die(mysqli_error($this->conectarBd()));
        echo "<div  class='tablas-admin'><table class='styled-table'>";
        echo "<tr><th>Id</th><th>Nombre</th><th>Apellidos</th><th>Correo Electronico</th><th>Teléfono</th><th>Teléfono de referencia</th><th>Acciones</th></tr>";
        if($reg = mysqli_fetch_array($consulta)){
            echo '<tr><td>' . $reg[0] . '</td>';
            echo '<td>' . $reg[1] . '</td>';
            echo '<td>' . $reg[2] . '</td>';
            echo '<td>' . $reg[3] . '</td>';
            echo '<td>' . $reg[4] . '</td>';
            echo '<td>' . $reg[5] . '</td>';
             echo '<td><form action="../Control/ctrlEspecialistas.php?id=' . $reg[0] . '" method="post"  class="boton-nav"  onsubmit="return confirmarEliminacion(' . $reg[0] . ')">
            <input type="hidden" name="opcion" value="4">
            <button><i class="fa-solid fa-trash"></i></button>
          </form><br>
          <form action="../Control/ctrlUsuario.php?telefono=' . $reg[4] . '" method="post"  class="boton-nav">
            <input type="hidden" name="opcion" value="5">
            <button><i class="fa-solid fa-pen-to-square"></i></button>              
          </form><br>
          <form action="../Control/ctrlUsuario.php?correo_e=' . $reg[4] . '" method="post"  class="boton-nav">
            <input type="hidden" name="opcion" value="6">
            <button class="btn btn-success"><i class="fa-solid fa-calendar-plus"></i></button>
              
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

    public function eliminarUsuario($id){
        $eliminar = mysqli_query($this->conectarBd()," DELETE FROM usuariosespecialistas WHERE id = '$id' ")
        or die(mysqli_error($this->conectarBd()));
        if($eliminar){
            echo '<script type="text/javascript">
            
            window.location.href="../Vista/panelEspecialista.php";
            </script>';
        }else{
            echo 'Error al elimar usuario ';
        }
    }

    public function modificarUsuario($tel){
        $modificar = mysqli_query($this->conectarBd(),"SELECT * FROM usuariosespecialistas WHERE telefono = '$tel'")
        or die(mysqli_error($this->conectarBd()));
        if($reg = mysqli_fetch_array($modificar)){
            echo "<form action='../Control/ctrlEspecialistas.php' method='post' class='form-container'>
            Id del Usuario:
            <input type='number' name='id' value='" . $reg[0] . "' readonly>
            Ingrese el nuevo nombre:
            <input type='text' name='nombrenuevo' value='" . $reg[1] . "'>
            <input type='hidden' name='nombreviejo' value='" . $reg[1] . "'>
            Ingrese los nuevos apellidos:
            <input type='text' name='apellidosnuevos' value='" . $reg[2] . "'>
            <input type='hidden' name='apellidosviejos' value='" . $reg[2] . "'>
            Ingrese el nuevo Correo:
            <input type='email' name='emailnuevo' value='" . $reg[3] . "'>
            <input type='hidden' name='emailviejo' value='" . $reg[3] . "'>
            Ingrese el nuevo Telefono:
            <input type='number' name='telefononuevo' value='" . $reg[4] . "'>
            <br>
            <input type='hidden' name='telefonoviejo' value='" . $reg[4] . "'>
            Ingrese el nuevo Telefono de referencia nuevo:
            <input type='number' name='telefono_referencianuevo' value='" . $reg[5] . "'>
            <input type='hidden' name='telefono_referenciaviejo' value='" . $reg[5] . "'>
            <br>
            <input type='hidden' name='opcion' value='6'>
            <br><input type='submit' value='Modificar'>
            <a href='../Vista/panelEspecialista.php'><input type='submit' value='Cancelar'></a>
            </form>";
        } else {

            echo 'No existe usuario con dicho telefono';
        }
    }
    public function actualizarUsuario($nombrenuevo, $apellidosnuevos, $emailnuevo, $telefononuevo, $telefonoviejo, $telefono_referencianuevo){
        $modificar = mysqli_query($this->conectarBd(),"SELECT * FROM usuariosespecialistas WHERE telefono = $telefononuevo")
        or die(mysqli_error($this->conectarBd()));
        if($reg = mysqli_fetch_array($modificar)){
            echo "El número fue almacenado anteriormente";

        }else{
            $modificar = mysqli_query($this->conectarBd(),"UPDATE usuariosespecialistas SET nombre = '$nombrenuevo', apellidos = '$apellidosnuevos', email='$emailnuevo', telefono = '$telefononuevo', telefono_referencia = '$telefono_referencianuevo' WHERE telefono = '$telefonoviejo'")
            or die(mysqli_error($this->conectarBd()));
            echo '<script type="text/javascript">
            alert("Usuario modificado correctamente.");
            window.location.href="../Vista/panelEspecialista.php";
            </script>';
        }
    }

}
?>