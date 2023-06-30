<?php
    require_once "Coche.php";

    $miCoche = new Coche("Ford", "Fiesta");
    $miCoche->repostarCombustible(50);
    $miCoche->mover(200);
    $miCoche->mover(300);
    $miCoche->repostarCombustible(20);

    $miCoche->setMatricula('4432FRG');

    $miCoche->pintaInfo();

    $miCoche->mover(300);
    $miCoche->mover(150);

    $miCoche->pintaInfo();


    $otroCoche = new Coche("Seat", "Ibiza");
    $otroCoche->repostarCombustible(20);
    $otroCoche->mover(200);
    $otroCoche->mover(350);

    $otroCoche->pintaInfo();


    $ferrari = new Coche(modelo:"Testarrosa", marca:"Ferrari");
    $ferrari->pintaInfo();
