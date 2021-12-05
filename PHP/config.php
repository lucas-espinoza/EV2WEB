<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXITO</title>
    <link href="../CSS/estilo.css" rel="stylesheet">
</head>
<body>
    <h1 id="exito">EXITO AL GUARDAR!</h1>
</body>
</html>
<?php
    extract($_REQUEST);
    $file=fopen("Datos-formulario.txt","a");

    fwrite($file,"Nombre: ");
    fwrite($file, $nombre ."\n");
    fwrite($file,"Apellido: ");
    fwrite($file, $apellido ."\n");
    fwrite($file,"Telefono: ");
    fwrite($file, $telefono ."\n");
    fwrite($file,"Correo: ");
    fwrite($file, $correo ."\n \n");
    fclose($file);
?>