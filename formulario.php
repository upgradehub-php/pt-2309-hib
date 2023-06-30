<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fichero = $_FILES['fichero'];

   // print_r($fichero);

    echo file_get_contents($fichero['tmp_name']);

    //echo "El username es $username y la contraseña $password";
