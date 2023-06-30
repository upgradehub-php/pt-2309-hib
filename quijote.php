<?php

    $palabra = $_POST['palabra'];
    $fichero = $_FILES['fichero'];

    // Busco la ruta del fichero
    $rutaFichero = $fichero['tmp_name'];

    // Obtengo el contenido del fichero
    $contenidoFichero = file_get_contents($rutaFichero);

    // Cuento las apariciones de palabra dentro de contenidoFichero
    $numApariciones = substr_count($contenidoFichero, $palabra);

    echo "La palabra $palabra aparece $numApariciones veces";

