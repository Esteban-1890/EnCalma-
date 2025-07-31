<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>BlogPrueba</title>
</head>
<body>
    <form action="../Control/ctrlBlogPrueba.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="titulo" placeholder="Título del blog" required><br><br>
        <textarea name="informacion" placeholder="Contenido" required rows="6" cols="50"></textarea><br><br>
        <input type="text" name="imagen" placeholder="URL de la imagen" required><br><br>
        <input type="hidden" name="opcion" value="1">
        <button type="submit">Publicar</button>
    </form>
</body>
</html>
