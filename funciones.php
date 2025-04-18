<?php

function mostrar_tecnologias()
{
    $tecnologias = file_get_contents("tecnologias.json");
    $tecnologias_array = json_decode($tecnologias, true);

    foreach ($tecnologias_array as $tecnologia) {
        foreach ($tecnologia as $parte => $lenguajes) {
            echo "<div class='mostrar-tecnologias'>$parte:";
            echo "<ul>";
            foreach ($lenguajes as $lenguaje) {
                echo "<li class='li-lenguaje'>$lenguaje</li>";
            }
            echo "</ul>";
            echo "</div>";
        }
    }
}

function mostrar_experiencia()
{
    // Obtener los datos desde el archivo JSON
    $experiencia = file_get_contents("experiencia.json");
    $experiencia_array = json_decode($experiencia, true);

    // Iterar a través de los elementos de experiencia
    foreach ($experiencia_array as $index => $tipo) {
        // Generamos un ID único para cada checkbox
        $id = "timeline-item-$index";

        // Cada item de la línea de tiempo
        echo "<div class='timeline-item'>";

        // Checkbox oculto que se usará para activar/desactivar la visibilidad del contenido
        echo "<input type='checkbox' id='$id' class='timeline-checkbox'>";

        // Etiqueta para el punto de la línea de tiempo (es el que hace click el usuario)
        echo "<label for='$id' class='timeline-point'></label>";

        // Contenido que se muestra al hacer click (cuando el checkbox está marcado)
        echo "<div class='timeline-content'>";
        echo "<div class='timeline-fecha'>{$tipo['fecha']}</div>";
        echo "<div class='timeline-titulo'>{$tipo['titulo']}</div>";
        echo "<div class='timeline-descripcion'>{$tipo['descripcion']}</div>";
        echo "</div>";  // Cierre del contenido de cada item

        echo "</div>";  // Cierre de la línea de tiempo de cada item
    }
}