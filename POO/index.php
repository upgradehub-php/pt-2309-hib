<?php
    require_once "Coche.php";

    $coche = new Coche("Ford", "Focus");

    $coche->repostarCombustible(20);
    $coche->mover(200);
    $coche->mover(54);

    $coche->pintaInfo();

    $coche->repostarCombustible(5);
    $coche->mover(150);

    $coche->pintaInfo();

    $otroCoche = new Coche("Seat", "Ibiza");
    $otroCoche->repostarCombustible(10);
    $otroCoche->mover(456);

    $otroCoche->pintaInfo();

    $ferrari = new Coche("Ferrari", "Testarrosa");
    $ferrari->pintaInfo();
