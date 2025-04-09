<?php include_once("funciones.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Bienvenidos a mi porfolio</h1>

    <section class="contenedor">
    <h2>Experiencia</h2>
        <div class="experiencia">
        </div>
        <h2>Tecnologias que manejo</h2>
        <div class="tecnologias">
            <?php mostrar_tecnologias() ?>
        </div>
        <h2>Mis proyectos</h2>
        <div class="proyectos">
            
        </div>
        <h2>Contacto</h2>
        <div class="enlaces">
            <span>Linkedin</span>
            <span>Github</span>
        </div>
    </section>
</body>

</html>