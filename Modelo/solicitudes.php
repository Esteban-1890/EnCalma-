<?php

class solicitudes
{
    private $nombre;
    private $apellidos;
    private $edad;
    private $email;
    private $experiencia;
    private $curriculum;
    private $carta1;
    private $carta2;

    public function inicializar($nombre, $apellidos, $edad, $email, $experiencia, $curriculum, $carta1, $carta2)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
        $this->email = $email;
        $this->experiencia = $experiencia;
        $this->curriculum = $curriculum;
        $this->carta1 = $carta1;
        $this->carta2 = $carta2;
    }

    public function conectarBd()
    {
        $con = mysqli_connect("localhost", "root", "", "encalma")
            or die("Problemas con la conexion a la base de datos");
        return $con;

    }

    public function enviarSolicitud()
    {
        $conn = $this->conectarBd();

        $stmt = $conn->prepare("INSERT INTO solicitudes(nombre, apellidos, edad, email, experiencia, curriculum, carta1, carta2) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->bind_param(
            "ssisssss",
            $this->nombre,
            $this->apellidos,
            $this->edad,
            $this->email,
            $this->experiencia,
            $this->curriculum,
            $this->carta1,
            $this->carta2
        );

        if ($stmt->execute()) {
            echo '<script>alert("Solicitud enviada correctamente"); window.location.href="../Index.php";</script>';
        } else {
            echo "Error al insertar: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }







}

?>