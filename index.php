<?php

$length = $_GET['lenght_password'] ?? '';

if (!empty($length)) {
    $password = password_generator($length);
}

function password_generator($length)
{
    $password = '';

    $letters = 'abcdefghijklmnopqrstuvwxyz';
    $numbers = '0123456789';
    $symbols = '!@#$%^&*()_+';

    $characters = $letters . strtoupper($letters) . $numbers . $symbols;

    $total_characters = mb_strlen($characters);

    while (mb_strlen($password) < $length) {
        $random_index = rand(0, $total_characters - 1);

        $random_character = $characters[$random_index];

        $password .= $random_character;
    }

    return $password;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body class="bg-primary-subtle" data-bs-theme="dark">
    <div class="container text-center">
        <div>
            <h1 class="text-secondary">Strong Password Generetor</h1>
            <h2>Genera una password sicura</h2>
        </div>
        <?php if (isset($password)) : ?>
            <div class="alert alert-info">
                La password generata e' : <?= $password ?>
            </div>
        <?php endif;  ?>
        <!-- FORM -->
        <form action="" method="GET" class="p-2">
            <!-- Input di tipo NUMBER dove chiedo la lunghezza della password  -->
            <div class="row text-start">
                <div class="col-8">
                    <label for="lenght_password" class="form-label">Lunghezza della password:</label>
                </div>
                <div class="col-4">
                    <input type="number" class="form-control" id="lenght_password" name="lenght_password" min="7" value="<?= $length ?? 7 ?>">
                </div>
            </div>

            <button type="submit" class="btn btn-success">invia</button>
        </form>
    </div>
</body>

</html>