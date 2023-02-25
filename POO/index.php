<?php
    require_once "Coche.php";

    $miCoche = new Coche("Seat", "Ibiza");

    $miCoche->repostarCombustible(30);
    $miCoche->mover(100);
    $miCoche->mover(150);

    $miCoche->pintarInfo();

    $miCoche->mover(213 + 5);

    $miCoche->pintarInfo();

    $otroche = new Coche("Ford", "Fiesta");

    $otroche->repostarCombustible(10);
    $otroche->mover(300);

    $otroche->pintarInfo();

    $ferrari = new Coche("Ferrari", "Testarrosa");

    $ferrari->pintarInfo();
