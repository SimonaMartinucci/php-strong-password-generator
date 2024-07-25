<?php

$lunghezza = $_GET['number'];

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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>php-strong-password-generator</title>
</head>
<body>
    <h1>Strong Password Generator</h1>

    <form action="index.php" method="GET">
        <label for="number">Lunghezza password</label>
        <input type="number" name="number" id="number">
        <button type="submit">Genera</button>
    </form>

    <div><?php echo generatorePassword($lunghezza); ?></div>

</body>
</html>