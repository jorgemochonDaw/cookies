<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mochon eat</title>
</head>
<?php
require './vendor/autoload.php';

use App\Cookies;

$cookie = new Cookies();
?>

<body>
    <header>
        <h1>Mochon eat</h1>
    </header>


    <?php
    if (isset($_POST["enviar"])) {
        $plato1 = $_POST["plato1"];
        $plato2 = $_POST["plato2"];
        $postre = $_POST["postre"];
        $cookie->crearCookie($plato1, $plato2, $postre);
    }
    ?>
</body>

</html>