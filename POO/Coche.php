<?php

class Coche
{
    private string $marca;
    private string $modelo;
    private string $matricula;
    private float $cantidadCombustible;
    private int $numKilometrosRecorridos;

    public function __construct(string $marca, string $modelo)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;

        $this->cantidadCombustible = 0;
        $this->numKilometrosRecorridos = 0;
    }

    function mover(int $distancia)
    {
        $this->numKilometrosRecorridos += $distancia;
        $this->cantidadCombustible -= $distancia*0.05;
    }

    function repostarCombustible($cantidadCombustible)
    {
        $this->cantidadCombustible += $cantidadCombustible;
        //$this->cantidadCombustible = $this->cantidadCombustible + $cantidadCombustible
    }

    function pasarITV()
    {

    }

    public function getMarca(): string
    {
        return $this->marca;
    }

    public function setMarca(string $marca): void
    {
        $this->marca = $marca;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function setModelo(string $modelo): void
    {
        $this->modelo = $modelo;
    }

    public function getMatricula(): string
    {
        return $this->matricula;
    }

    public function setMatricula(string $matricula): void
    {

        $this->matricula = $matricula;
    }

    public function getCantidadCombustible(): float
    {
        return $this->cantidadCombustible;
    }

    public function setCantidadCombustible(float $cantidadCombustible): void
    {
        $this->cantidadCombustible = $cantidadCombustible;
    }

    public function getNumKilometrosRecorridos(): int
    {
        return $this->numKilometrosRecorridos;
    }

    public function setNumKilometrosRecorridos(int $numKilometrosRecorridos): void
    {
        $this->numKilometrosRecorridos = $numKilometrosRecorridos;
    }

    function pintaInfo()
    {

        echo <<<COCHE
            <ul>
                <li>Marca: $this->marca</li>
                <li>Modelo: $this->modelo</li>
                <li>Cantidad Combustible: $this->cantidadCombustible</li>
                <li>Kn Recorridos: $this->numKilometrosRecorridos</li>
            </ul>
        COCHE;
    }

}
