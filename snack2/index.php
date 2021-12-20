<?php
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];
    if (strlen($name) > 3 && str_contains($mail, '.') && str_contains($mail, '@') && !is_nan($age)) {
        echo 'Accesso eseguito';
    }
    else {
        echo 'accesso negato';
    };
