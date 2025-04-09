<?php

function mostrar_tecnologias()
{
    $tecnologias = file_get_contents("tecnologias.json");
    $tecnologias_array = json_decode($tecnologias);


    foreach ($tecnologias_array as $tecnologia) {
        foreach ($tecnologia as $parte => $lenguajes) {
            echo "<div class='mostrar-tecnologias'>$parte :";
            echo "<ul>";
            foreach ($lenguajes as $lenguaje) {
                echo "<li>$lenguaje</li>";
            }
            echo "</ul>";
            echo "</div>";
        }
    }
}
