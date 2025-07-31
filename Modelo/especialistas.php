<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="../Css/style.css">
<?php
class Especialistas
{
    private $id;
    private $nombre;
    private $apellidos;
    private $edad;
    private $ine;
    private $curp;
    private $comprobante_domicilio;
    private $rfc;
    private $activo;
    private $contrasena;

    public function inicializar($id, $nombre, $apellidos, $edad, $ine, $curp, $comprobante_domicilio, $rfc, $activo, $contrasena)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
        $this->ine = $ine;
        $this->curp = $curp;
        $this->comprobante_domicilio = $comprobante_domicilio;
        $this->rfc = $rfc;
        $this->activo = $activo;
        $this->contrasena = $contrasena;

    }

    public function conectarBd()
    {
        $con = mysqli_connect("localhost", "root", "", "encalma") or die("Problemas con la conexion a la base de datos");
        return $con;
    }

    
}

?>