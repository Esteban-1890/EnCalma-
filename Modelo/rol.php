<?php
class Rol
{
    private $id;
    private $tipo_rol;
    private $nombre;
    private $apellidos;
    private $email;
    private $contrasena;

    public function inicializar($id, $tipo_rol, $nombre, $apellidos, $email, $contrasena)
    {
        $this->id = $id;
        $this->tipo_rol = $tipo_rol;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->contrasena = $contrasena;
    }

    public function conectarBd()
    {
        $con = mysqli_connect("localhost", "root", "", "encalma") or die("Problemas con la conexion a la base de datos");
        return $con;
    }

    public function ingresarRol()
    {

    }

    public function iniciarSesion($email, $contrasena)
    {

        $ingresar = mysqli_query($this->conectarBd(), "SELECT * FROM administrador WHERE email = '$email' ") or die(mysqli_error($this->conectarBd()));


        if (mysqli_num_rows($ingresar) == 1) {

            $admin = mysqli_fetch_assoc($ingresar);

            if ($admin['contrasena'] === $contrasena) {
                echo '<script type="text/javascript">
                alert("Bienvenido Administrador");
                window.location.href="../Vista/panelAdmin.php";
                </script>';
            } else {
                echo '<script>alert("Contraseña incorrecta");
            window.location.href="../Vista/roles.php";</script>';
            }
        } else {
            echo '<script>alert("Correo no registrado");
        window.location.href="../Vista/roles.php";</script></script>';
        }
    }


}

?>