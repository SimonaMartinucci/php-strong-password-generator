<?php
include __DIR__ . '/functions.php';

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
    <div class="container my-5 py-5 text-center bg-info-subtle">
        <h1 class="fw-bold mb-5">Strong Password Generator</h1>

        <form action="index.php" method="GET" class="my-4">
            <label for="number" class="fs-5 me-4">Lunghezza password:</label>
            <input type="number" name="number" id="number">
            <button type="submit" class="ms-2 btn btn-primary">Genera</button>
        </form>

        <?php if($lunghezza >= 8 && $lunghezza <= 32): ?>
            <div class="fs-5"><?php echo generatorePassword($lunghezza); ?></div>
        <?php elseif(!$lunghezza): ?>
            <div class="fs-6">Genera una password di lunghezza compresa tra 8 e 32</div>    
        <?php else: ?>
            <div class="text-danger">Errore! La password deve avere una lunghezza tra 8 e 32</div>
        <?php endif; ?>
    </div>
</body>
</html>