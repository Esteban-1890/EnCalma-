<?php
class BlogPrueba
{
    private $titulo;
    private $informacion;
    private $imagenUrl;

    public function inicializar($titulo, $informacion, $imagenUrl)
    {
        $this->titulo = $titulo;
        $this->informacion = $informacion;
        $this->imagenUrl = $imagenUrl;
    }

    public function conectarbd()
    {
        $con = new mysqli("localhost", "root", "", "encalma");
        if ($con->connect_error) {
            die("Error al conectar con la base de datos: " . $con->connect_error);
        }
        return $con;
    }

    public function publicarPost()
    {
        // Para depurar, puedes descomentar la línea siguiente y ver qué URL llega:
        // echo "URL recibida: " . $this->imagenUrl; exit;

        $sql = "INSERT INTO blogprueba (titulo, informacion, imagen)
                VALUES ('{$this->titulo}', '{$this->informacion}', '{$this->imagenUrl}')";

        $con = $this->conectarbd();
        if (!$con->query($sql)) {
            die("Problemas al insertar: " . $con->error);
        }
        $con->close();

        echo '<script>alert("Post publicado con éxito"); window.location.href="../Vista/verBlog.php";</script>';
    }

    public function mostrarBlog()
    {
        $con = $this->conectarbd();
        $result = $con->query("SELECT * FROM blogprueba ORDER BY fecha DESC");
        echo "<h2>Últimos posts del blog</h2>";
        while ($row = $result->fetch_assoc()) {
            echo "<h3>" . htmlspecialchars($row["titulo"]) . "</h3>";
            echo "<p>" . nl2br(htmlspecialchars($row["informacion"])) . "</p>";
            echo "<img src='" . htmlspecialchars($row["imagen"]) . "' width='300'><br>";
            echo "<small>Publicado: " . htmlspecialchars($row["fecha"]) . "</small><hr>";
        }
        $con->close();
    }
}
?>
