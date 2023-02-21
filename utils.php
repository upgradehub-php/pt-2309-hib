<?php

function suma ( int $num1, int $num2, int $num3=5): int{

    $resultado = $num1 + $num2 + $num3;

    return $resultado;
}

function saluda (string $nombre): void{
    echo "<br>Buenas tarde $nombre";
}

function dameFecha(): string{
    return date('d-m-Y');
}
