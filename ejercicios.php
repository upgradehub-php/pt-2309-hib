<?php


// 1.4

    $character = [
        "name" => 'Jach Sparrow',
        "age" => 10
    ];

    $character["age"] = 25;

//    print_r($character);

    $firstName = "Jon";
    $lastName = "Snow";
    $age = 24;

    $complete = 'Soy '.$firstName.' '.$lastName.', tengo '.$age.' años';

    //echo $complete;

    //echo "<br>";

    $variable1 = 10;
    $variable2 = 5;
    $resultado = $variable1 * $variable2;
    //echo $resultado;
    //echo 10 * 5;

    $cars = ["Saab", "Volvo", "BMW"];
    $cars[0] = "Ford";

    //print_r($cars);

    $numElementos = count($cars);
    //echo $numElementos;

    $rickMorty = ["Rick", "Beth", "Jerry"];
    $rickMorty[] = "Morty";
    $rickMorty[] = "Summer";

    print_r($rickMorty);
