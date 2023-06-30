<?php

class Coche
{
    private string $matricula;
    private string $marca;
    private string $modelo;
    private float $cantidadCombustible;
    private int $kilometrosRecorridos;

    public function __construct(string $marca, string $modelo)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cantidadCombustible = 0;
        $this->kilometrosRecorridos = 0;
        $this->matricula = '';
    }

    function repostarCombustible(int $cantidadCombustible): void
    {
        $this->cantidadCombustible += $cantidadCombustible;
        // $this->cantidadCombustible = $this->cantidadCombustible + $cantidadCombustible;
    }

    function mover(int $distancia)
    {
        $this->kilometrosRecorridos += $distancia;
        $this->cantidadCombustible -= $distancia * 0.05;
    }

    function pasarITV()
    {

    }

    /**
     * @return string
     */
    public function getMatricula(): string
    {


        return $this->matricula;
    }

    /**
     * @param string $matricula
     */
    public function setMatricula(string $matricula): void
    {
        $this->matricula = $matricula;
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
     * @return float
     */
    public function getCantidadCombustible(): float
    {
        return $this->cantidadCombustible;
    }

    /**
     * @param float $cantidadCombustible
     */
    public function setCantidadCombustible(float $cantidadCombustible): void
    {
        $this->cantidadCombustible = $cantidadCombustible;
    }

    /**
     * @return int
     */
    public function getKilometrosRecorridos(): int
    {
        return $this->kilometrosRecorridos;
    }

    /**
     * @param int $kilometrosRecorridos
     */
    public function setKilometrosRecorridos(int $kilometrosRecorridos): void
    {
        $this->kilometrosRecorridos = $kilometrosRecorridos;
    }

    function pintaInfo()
    {
        echo "<ul>";
        echo "<li>Marca:$this->marca</li>";
        echo "<li>Modelo:$this->modelo</li>";
        echo "<li>Combustible:$this->cantidadCombustible</li>";
        echo "<li>Km Recorridos:$this->kilometrosRecorridos</li>";
        echo "<li>Matricula:$this->matricula</li>";
        echo "</ul>";
    }

}
