<?php

    $username = $_POST['username'];
    $password = $_POST['password'];
    $image = $_FILES['image'];

    print_r($image);

    echo "El usuario es $username y la contraseña $password";

    echo file_get_contents($image['tmp_name']);
