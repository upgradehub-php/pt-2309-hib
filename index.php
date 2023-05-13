<?php
    //echo "Hola mundo";

    $numero = 5;
    $pi = 3.1416;
    $nombre = "Moises";
    $apellidos = 'Carretero';
    $verdadero = true;
    $falso = false;
    $nulo = null;
    //echo 'me llamo $nombre $apellidos y tengo 44 años';

    $frutas = [
        'fresa',
        'manzana',
        'melón',
        22 => 'pera',
        10 => 'naranja',
        'roja' => 'sandia',
        'melocotón',
        2 => 'aguacate'
    ];

    $frutas[44] = "higo";
    $frutas[] = 'limón';

    //echo $frutas[10];
    

    //print_r($frutas);
//http://localhost:8080/index.php?nombre=Moises&apellidos=Carretero&edad=66

    $name = $_GET['nombre'];
    $surname = $_GET['apellidos'];
    $age = $_GET['edad'];

    //echo "Me llamo $name $surname y tengo $age años";
/*
    $nombre = 'Oscar';

    // 1.- $nombre = 'Moises'
    // 2.- if ($nombre)  -->   if ($nombre == true)
    if ($nombre == 'Moises'){
        echo "Soy Moi";
    } else {
        echo "Soy Oscar";
    }*/

    $usuario = [
        "a" => "Juan",
        "b" => "María",
        "c" => "Manu",
        "d" => "Ana"
    ];

    $nombre = "Moises";

    $name= $nombre;

    echo "nombre vale $nombre y name vale $name";

    $name = 'Pepe';

echo "<br>nombre vale $nombre y name vale $name";
