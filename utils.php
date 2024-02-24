<?php

function sumar(int $num1, int $num2): int
{
    $resultado = $num1 + $num2;
    return $resultado;
}

function saludo(string $nombre, string $apellidos, int $edad, $ciudad='', $tfn=99, $coche=''): void
{
    echo "<br>Buenas noches $nombre $apellidos y tengo $edad años y soy de $ciudad";
}

function dameFecha(): string
{
    return "<br>".date("d/m/Y H:i:s");
}
