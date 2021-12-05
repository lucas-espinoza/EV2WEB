<!DOCTYPE html>
<html lang="es-CL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="_.lucasespinoza">
    <link href="../CSS/estilo.css" rel="stylesheet">
    <title>Contactos</title>
</head>
<body>

    <!--Barra de navegacion-->
    <ul class="navbar">
        <li><a href="../index.html">HOME</a></li>
        <li><a href="../nosotro.html">NOSOTROS</a></li>
        <li><a class="estasEn">CONTACTOS</a></li>
        <li><a href="../random.html">RANDOM</a></li>
    </ul>

    <!-- Seccion de formulario -->
    <main>
        <section class="formulario">
            <div>
                <input placeholder="Nombre" id="nombre">
                <input placeholder="Apellido" id="apellido">
                <input placeholder="Telefono" id="telefono">
                <input placeholder="Correo" id="correo">
            </div>
    
            <div id="boton">
                <button onclick="enviar">ENVIAR</button>
            </div>
        </section>
    </main>
</body>
</html>