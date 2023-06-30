<?php

    header("Content-Type: image/png");

    /*$result = file_put_contents(
        "quijote.txt",
        " de cuyo nombre no quiero acordarme",
        FILE_APPEND
    );*/

    /*if ($result === false){
        echo "Error al escribir en el fichero";
    } else {
        echo "Fichero escrito correctamente";
    }*/

    $quijote = file_get_contents("elephpant.png");
    echo $quijote;
