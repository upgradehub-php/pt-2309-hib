<?php

    $numero = 5;
    $pi = 3.1416;
    $nombre = "Moises";
    $apellido = 'Carretero';

    //echo 'Me \' llamo '.$nombre.' Carretero';

    $verdadero = true;
    $falso = false;

    $nulo = null;

    $frutas = [
        'fresa',
        'manzana',
        'pera',
        33 => 'naranja',
        12 => 'melón',
        'roja' => 'sandia',
        '3e4fjh7' => 'aguacate',
        'higo',
        45 => 'frambuesa',
        'tomate',
        34 => 'plátano'
    ];



    $frutas[99] = 'mandarina';

    $frutas[] = 'uva';

    //echo $frutas[100];

    //print_r($frutas);

    // http://localhost/index.php?nombre=Juan&apellidos=Garcia&edad=33

    $nombre = $_GET['nombre'];
    $apellido= $_GET['apellidos'];
    $age = $_GET['edad'];

    //echo "Me llamo $nombre $apellido y tengo $age años";

    $profe ='Roberto';
    // 1.- $profe = Moises
    // 2.- if ($profe)  --> if ($profe == true)
    if ('Moises' == $profe){
        echo "me llamo Moi";
    } else {
        echo "me llamo Rober";
    }
