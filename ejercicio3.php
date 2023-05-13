<?php
    $numero = $_GET['numero'];

    $potencia = 1;

    $resultado = pow($numero, $potencia);

    // pow($numero, $potencia)
    // $numero ** $potencia
    while ($resultado < 10000){
        $potencia++;
        $resultado = pow($numero, $potencia);
    }

    echo "$numero hay que elevarlo a $potencia para que sea mayor de 10000";
