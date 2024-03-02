<?php

abstract class Vehiculo
{
    protected int $ruedas;


    public function getRuedas(): int
    {
        return $this->ruedas;
    }

    public function setRuedas(int $ruedas): void
    {
        echo $this->getRuedas();
        $this->ruedas = $ruedas;
    }

    function pintaInfo()
    {

    }

}
