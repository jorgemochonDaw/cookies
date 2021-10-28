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
    session_start();
    $_SESSION['iniciarFormPlato1'] = true;
    $_SESSION['iniciarFormPlato2'] = true;
    $_SESSION['iniciarSesionPostre'] = false;

    if (isset($_SESSION['iniciarFormPlato1']) == true) {

    ?>
        <section>
            <form action="" method="post">
                <label for="plato1">Plato 1: </label>
                <input type="text" name="plato1">
                <input type="submit" name="enviarPlato1" value="Enviar">
            </form>
        </section>
        <br>
    <?php
        $_SESSION['iniciarFormPlato1'] = false;
        $_SESSION['iniciarFormPlato2'] = true;
        session_destroy();
    } else if (isset($_SESSION['iniciarFormPlato2']) == true) {
    ?>
        <section>
            <form action="" method="post">
                <label for="plato2">Plato 2: </label>
                <input type="text" name="plato2">
                <input type="submit" name="enviarPlato2" value="Enviar">
            </form>
        </section>
    <?php
    } else if (isset($_SESSION['iniciarFormPlato2']) == false) {
    ?>
        <section>
            <form action="" method="post">
                <label for="postre">Postre: </label>
                <input type="text" name="postre">
                <input type="submit" name="enviarPostre" value="Enviar">
            </form>
        </section>
    <?php
    }
    if (isset($_POST["enviarPlato1"])) {
        $plato1 = $_POST["plato1"];
        $_SESSION['iniciarFormPlato1'] = false;
        $_SESSION['iniciarFormPlato2'] = true;
        $cookie->cookiePlato1($plato1);
       
    }
    ?>
</body>

</html>