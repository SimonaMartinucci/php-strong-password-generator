<?php

$lunghezza = isset($_GET['number']) ? $_GET['number'] : 0;

// generatore lettere maiuscole e minuscole
function generatoreLettere($lunghezza) {
    $lettereRandom = '';
    for($i = 0; $i < $lunghezza; $i++) {
        if (random_int(0, 1) === 1) {
            $lettereRandom .= chr(random_int(65, 90));
        } else {
            $lettereRandom .= chr(random_int(97, 122));
        }
    }

    return $lettereRandom;
}

// generatore numeri
function generatoreNumeri($lunghezza) {
    $numeriRandom = '';
    for($i = 0; $i < $lunghezza; $i++) {
        $numeriRandom .= random_int(0,9);
    }

    return $numeriRandom;
}

// generatore caratteri speciali
function generatoreCaratteriSpeciali($lunghezza) {
    $symbols = '!?&%$<>^+-*/()[]{}@#_=';
    $caratteri = '';

    for ($i = 0; $i < $lunghezza; $i++) {
        $caratteri .= $symbols[random_int(0, strlen($symbols) - 1)];
    }

    return $caratteri;
}

// generatore password
function generatorePassword($lunghezza) {
    $lettere = generatoreLettere($lunghezza);
    $numeri = generatoreNumeri($lunghezza);
    $caratteri = generatoreCaratteriSpeciali($lunghezza);

    $stringa = $lettere . $numeri . $caratteri;

    $password = str_shuffle($stringa);

    return substr($password, 0, $lunghezza);
}

?>