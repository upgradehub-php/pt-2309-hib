<?php


    $resultado = file_put_contents(
        'quijote.txt',
        " de cuyo nombre no quiero acordarme",
        FILE_APPEND
    );

    /*if ($resultado === false){
        echo "Error al escribir en el fichero";
    } else {
        echo "Fichero escrito correctamente";
    }*/

    $quijote = file_get_contents("quijote.txt");
    echo $quijote;
