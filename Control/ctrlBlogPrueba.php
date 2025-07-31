<?php
include("../Modelo/blogPrueba.php");

$blog = new BlogPrueba();

switch ($_REQUEST["opcion"]) {
    case '1':
        $titulo = $_POST['titulo'];
        $informacion = $_POST['informacion'];
        $imagenUrl = $_POST['imagen']; // coincide con name="imagen" del formulario

        $blog->inicializar($titulo, $informacion, $imagenUrl);
        $blog->publicarPost();
        break;
}
?>
