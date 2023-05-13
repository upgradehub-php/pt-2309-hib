<?php

require_once "vendor/autoload.php";

use Upgrade\Amazon\Login\Facebook\User as FacebookUser;
use Upgrade\Amazon\Login\Google\User as GoogleUser;
use ApiFacebook\Utils as FacebookApi;

$type='Facebook';

    if ($type == 'Google'){
        $googleUser = new GoogleUser();
        $result = $googleUser->login("moises", "1234");
        echo "Usuario logado correctamente con Google";
    } else {
        $apiFacebook = new FacebookApi();
        $facebookUser = new FacebookUser();
        $result = $facebookUser->login("moises", "1234");
        echo "Usuario logado correctamente con Facebook";
    }

