<?php

    $numero = 5;
    // asldfksal
    $pi = 3.1426;
    $nombre = "Moises";
    $apellidos = 'Carretero';

    $resultado = 3+5;

    //echo "Me llamo $nombre $apellidos y tengo (3+5) años";

    //echo "3 ";

    $verdadero = true;
    $falso = false;

    $nulo = null;

    $fruta = [
        'manzana',
        'fresa',
        'melocotón',
        44 => 'sandia',
        "445XFC" => 'melón',
        "445XFc" => 'tomate',
        'aguacate',
        22 => 'limón',
        'naranja',
        2 => 'higo',
        'fresa'
    ];
    //print_r($fruta);

    /*
     *
     * 'Ana'.toUpperCase()
     * [].sort()
     * if (name.nombre != null){
     *      lsdjfsldfjsçç
     * }
     * */

    $titulo = $_GET['titulo'] ?? 'Título por defecto';

    if (isset($_GET['nombre'], $_GET['apellidos'])) {

        $name = $_GET['nombre'];
        $surname = $_GET['apellidos'];

        echo "Me llamo $name $surname";
    }




    $res = sumar(4,6);
    echo "<br>El resultado de la función es $res";

