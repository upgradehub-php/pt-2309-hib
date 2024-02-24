<?php

    $cadenas = ["patata","cebolla","sal","pimienta","te","agua"];

    $palabraLarga = '';
    $palabraCorta = null;

    foreach ($cadenas as $palabra){
        if (strlen($palabra) > strlen($palabraLarga)){
            $palabraLarga = $palabra;
        }

        if (!$palabraCorta){
            $palabraCorta = $palabra;
        } else if (strlen($palabra) < strlen($palabraCorta)){
            $palabraCorta = $palabra;
        }
    }

    echo "La palabra larga es $palabraLarga <br> y la más corta es $palabraCorta";
