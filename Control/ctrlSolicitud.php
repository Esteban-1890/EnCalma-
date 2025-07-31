
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
    include("../Modelo/solicitudes.php");
    $soli = new solicitudes();
    $soli->conectarBd();
    switch($_REQUEST["opcion"]){
        case 1: 
            $soli->inicializar($_REQUEST['nombre'], $_REQUEST['apellidos'], $_REQUEST['edad'], $_REQUEST['email'], $_REQUEST['experiencia'], file_get_contents($_FILES['curriculum']['tmp_name']), file_get_contents($_FILES['carta1']['tmp_name']), file_get_contents($_FILES['carta2']['tmp_name']));
            $soli->enviarSolicitud();
        break;
        
    }

?>