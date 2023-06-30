<?php

function suma ( int $num1, int $num2, int $num3=0): int{

    echo "el numero 2 es $num2";



    $result = $num1 +$num2 + $num3;
    return $result;
}

function saludo(string $nombre): void{
    echo "Buenas tarde $nombre";
}

function dameFecha(): string{
    return date("d/m/Y");
}
