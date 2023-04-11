<?php

function randomPassword($n) {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789-/.?!1234567890";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < $n; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

echo randomPassword($_GET['length']);
echo $_GET['length'];
var_dump($_GET)
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Strong Password Generator</h1>
        <h2>Genera una password sicura</h2>
        <form action="index.php" method="GET">
            <div class="col-auto py-4">
                <label for="inputPassword2" class="visually-hidden">lunghezza</label>
                <input type="number" name="length" class="form-control" id="inputPassword2" placeholder="lunghezza">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Invia</button>
            </div>
            <h4><?php echo randomPassword($_GET['length'])?></h4>
        </form>
    </div>
</body>

</html>