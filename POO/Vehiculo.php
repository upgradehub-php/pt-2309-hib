<?php

abstract class Vehiculo
{
    protected $matricula;

    /**
     * @return mixed
     */
    protected function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * @param mixed $matricula
     */
    public function setMatricula($matricula): void
    {
        echo $this->getMatricula();
        $this->matricula = $matricula;
    }

    public abstract function mover(float $distancia);

}
