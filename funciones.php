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

function mostrar_experiencia_timeline()
{

    $experiencia = file_get_contents("experiencia.json");
    $experiencia_array = json_decode($experiencia, true);

    echo "<ul class='timeline'>";
    
    foreach ($experiencia_array as $index => $tipo) {

        echo "
        <li class='unchecked' >
            <div class='checkmark'>
                <span></span>
            </div>
            <div class='line-container'>
                <div class='line'></div>
            </div>
            <div class='text-container'>
                <div class='date'>$tipo[fecha]</div>
                <div class='text'>
                    <div class='timeline-titulo'>
                        $tipo[titulo]
                    </div>
                    <div class='timeline-descripcion'>
                        $tipo[descripcion]
                    </div>
                </div>
            </div>
        </li>
        ";
    }
    echo "</ul>";
}
