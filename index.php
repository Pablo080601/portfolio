<?php include_once("funciones.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="timeline.css">
</head>

<body>

    <header class="bienvenida">
        <h1>Pablo Ruiz</h1>
        <!-- <h2>Contacto</h2> -->
        <div class="enlaces">
            <a target="_blank" href="https://www.linkedin.com/feed/?trk=guest_homepage-basic_nav-header-signin"><img class="logo-linkedin" src="logo-linkedin.webp" alt="Linkedin"><span>Linkedin</span></a>
            <a target="_blank" href="https://github.com/Pablo080601"><img class="logo-github" src="logo-github.svg" alt="Github"><span>Github</span></a>
        </div>
    </header>
    <section class="contenedor">
        <h2>Experiencia</h2>
        <div class="experiencia">
            <?php mostrar_experiencia_timeline() ?>
        </div>
        <h2>Tecnologias que manejo</h2>
        <div class="tecnologias">
            <?php mostrar_tecnologias() ?>
        </div>
        <h2>Mis proyectos</h2>
        <div class="proyectos">
            <a target="_blank" href="https://github.com/Pablo080601/UF1846_pokecartas"><img class="img-pokecartas" src="pokecartas.png" alt="Pokecartas"></a>
        </div>
    </section>
</body>

</html>