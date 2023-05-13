<?php
require_once "Vehiculo.php";

class Coche extends Vehiculo
{

    protected string $marca;
    protected string $modelo;
    protected int $kilometrosRecorridos;
    protected float $cantidadCombustible;

    public function __construct(string $marca,string $modelo)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->kilometrosRecorridos = 0;
        $this->cantidadCombustible = 0;
    }

    public function mover(float $distancia)
    {
        $this->kilometrosRecorridos += $distancia;
        $this->cantidadCombustible -= $distancia * 0.05;
    }

    function repostarCombustible(float $cantidadCombustible)
    {
        $this->cantidadCombustible += $cantidadCombustible;
    }

    function pasarITV()
    {

    }

    /**
     * @return string
     */

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

    public function pintarInfo()
    {
        echo "<ul>";
        echo "<li>Marca: $this->marca</li>";
        echo "<li>Modelo: $this->modelo</li>";
        echo "<li>Cantidad Combustible: $this->cantidadCombustible</li>";
        echo "<li>Km Recorridos: $this->kilometrosRecorridos</li>";
        echo "</ul>";
    }


}
