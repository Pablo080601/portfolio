<?php include_once("funciones.php")?>

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
        <div class="experiencia">
            <h2>Experiencia</h2>
        </div>
        <div class="tecnologias">
            <h2>Tecnologias que manejo</h2>
            <?php mostrar_tecnologias()?>
        </div>
        <div class="proyectos">
            <h2>Mis proyectos</h2>
        </div>
        <div class="enlaces">
            <h2>Contacto</h2>
            <span>Linkedin</span>
            <span>Github</span>
        </div>
    </section>
</body>
</html>