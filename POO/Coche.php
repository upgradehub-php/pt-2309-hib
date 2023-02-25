<?php

class Coche
{
    protected string $marca;
    protected string $modelo;
    protected string $color;
    protected int $kmRecorridos;
    private float $cantidadCombustible;

    public function __construct(string $marca, string $modelo)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;

        $this->kmRecorridos = 0;
        $this->cantidadCombustible = 0;
    }

    function mover(int $distancia)
    {
        $this->kmRecorridos += $distancia;
        $this->cantidadCombustible -= $distancia * 0.05;
    }

    function repostarCombustible(float $cantidadCombustible)
    {
        $this->cantidadCombustible +=  $cantidadCombustible;
    }

    function pasarITV()
    {

    }

    /**
     * @return string
     */
    public function getMarca(): string
    {
        return $this->marca;
    }

    /**
     * @param string $marca
     */
    public function setMarca(string $marca): void
    {
        $this->marca = $marca;
    }

    /**
     * @return string
     */
    public function getModelo(): string
    {
        return $this->modelo;
    }

    /**
     * @param string $modelo
     */
    public function setModelo(string $modelo): void
    {
        $this->modelo = $modelo;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getKmRecorridos(): int
    {
        return $this->kmRecorridos;
    }

    /**
     * @param int $kmRecorridos
     */
    public function setKmRecorridos(int $kmRecorridos): void
    {
        $this->kmRecorridos = $kmRecorridos;
    }

    /**
     * @return float|int
     */
    public function getCantidadCombustible(): float|int
    {
        return $this->cantidadCombustible;
    }

    /**
     * @param float|int $cantidadCombustible
     */
    public function setCantidadCombustible(float|int $cantidadCombustible): void
    {
        $this->cantidadCombustible = $cantidadCombustible;
    }

    public function pintarInfo()
    {
        echo "<ul>";
        echo "<li>Marca: $this->marca</li>";
        echo "<li>Modelo: $this->modelo</li>";
        echo "<li>Km Recorridos: $this->kmRecorridos</li>";
        echo "<li>Cantidad combustible: $this->cantidadCombustible</li>";
        echo "</ul>";
    }

}
