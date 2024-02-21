<?php
if (!empty($_GET)) {
    $comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = [];
    $comb_len = strlen($comb) - 1;
    for ($i = 0; $i < $_GET['lenght_password']; $i++) {
        $n = rand(0, $comb_len);
        $pass[] = $comb[$n];
    }
    print(implode($pass));
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- FORM -->
    <form action="" method="GET">
        <!-- Input di tipo NUMBER dove chiedo la lunghezza della password  -->
        <label for="lenght_password" class="form-label">Lunghezza della password</label>
        <input type="number" class="form-control" id="lenght_password" name="lenght_password">

    </form>
</body>

</html>