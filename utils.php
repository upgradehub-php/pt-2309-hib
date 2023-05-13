<?php

function sumar (int|float $num1, int $num2, int $valor): int|float
{
    //global $valor;
    $valor++;
    echo "num1 es $num1 y num2 es $num2 y valor es $valor";
    $resultado = $num1 + $num2;

    return $resultado;
}

function saludo (string $nombre): void
{
    echo "Buenos días $nombre";
}

function dameFecha(): string
{
    $fecha = date("d-m-Y");
    return $fecha;
}
