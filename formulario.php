<?php

    $usuario = $_POST['user'];
    $contraseña = $_POST['password'];

    //echo "El usuario es $usuario y la contraseña $contraseña";

    $fichero = $_FILES['fichero'];

    print_r($fichero);
