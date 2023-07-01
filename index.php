<?php

    //echo "Hola Mundo";

    /*
     adsf
    asdf
    sad

      */

    $numero = 5;
    $pi = 3.1416;
    $nombre = "Moises";
    $apellidos = 'Carretero';
    $verdadero = true;
    $falso = false;
    $nulo = null;

    //echo "Me llamo $nombre $apellidos";

    $frutas = [
        "fresa",
        "cereza",
        "manzana",
        11 => "pera",
        'hhhh' => 'sandia',
        'melón',
        12 => 'higo'
    ];

    $frutas[44] = 'aguacate';
    $frutas[] = 'naranja';

    //echo $frutas[2];

    //print_r($frutas);

    $name = $_GET['nombre'];
    $surname = $_GET['apellidos'];
    $age = $_GET['edad'];

    echo "Me llamo $name $surname y tengo $age años";




