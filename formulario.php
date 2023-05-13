<?php
    header("Content-Type: image/png");

    $username = $_POST['username'];
    echo $username;
    $contraseña = $_POST['password'];

    if ($_FILES['foto']){
        $foto = $_FILES['foto'];
        //print_r($foto);


        echo file_get_contents($foto['tmp_name']);
    }


//    echo "El username es $username y la contraseña $contraseña";
