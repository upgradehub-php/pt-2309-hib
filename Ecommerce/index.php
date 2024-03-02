<?php
    require_once "Facebook/User.php";
    require_once "Google/User.php";

    use Google\User as GoogleUser;
    use Google\Admin;
    use Facebook\Login\User as FacebookUser;
    $type = 'Google';

    if ($type == 'Google'){
        $googleUser = new GoogleUser();
        echo $googleUser->login("asfd", "asdfasd");
    } else {
        $facebookUser = new FacebookUser();
        echo $facebookUser->login("asfd", "asdfasd");
    }

