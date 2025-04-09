<?php

function mostrar_tecnologias() {
    $tecnologias=file_get_contents("tecnologias.json");
    $tecnologias_array=json_decode($tecnologias);

    echo "<ul>";
    foreach ($tecnologias_array as $tecnologia) {
        foreach ($tecnologia as $parte => $lenguajes) {
            echo "$parte :";
            foreach ($lenguajes as $lenguaje) {
                echo "<li>$lenguaje</li>";
            }
        }
    }
    echo "</ul>";
}