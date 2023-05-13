<?php
    require_once "Coche.php";
    require_once "Vehiculo.php";

    $miCoche = new Coche('Seat', 'Ibiza');
    $miCoche->repostarCombustible(50);
    $miCoche->mover(200);
    $miCoche->mover(150);
    $miCoche->repostarCombustible(20);

    $miCoche->pintarInfo();

    $miCoche->mover(200);
    $miCoche->mover(350);

    $miCoche->pintarInfo();

    $otroCoche = new Coche('Ford', 'Fiesta');
    $otroCoche->repostarCombustible(10);
    $otroCoche->mover(500);
    $otroCoche->pintarInfo();

    $ferrari = new Coche('Ferrari', 'Testarrosa');
    $ferrari->pintarInfo();

    $vehiculo = new Vehiculo();
