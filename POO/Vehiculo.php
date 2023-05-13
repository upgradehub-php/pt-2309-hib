<?php

abstract class Vehiculo
{
    protected string $matricula;

    public abstract function mover(float $distancia);

    public function getMatricula(): string
    {
        echo $this->matricula;
        return $this->matricula;
    }

    /**
     * @param string $matricula
     */
    public function setMatricula(string $matricula): void
    {
        $this->matricula = $matricula;
    }
}
