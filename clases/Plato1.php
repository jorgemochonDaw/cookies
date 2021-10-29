<section>
    <form action="" method="post">
        <label for="plato1">Plato 1: </label>
        <input type="text" name="plato1">
        <input type="submit" name="enviarPlato1" value="Enviar"> <br> <br>
        <a href="http://localhost/php/cookies/clases/Plato2.php">Siguiente</a>
    </form>
</section>

<?php
require './../vendor/autoload.php';

use App\Cookies;

$cookie = new Cookies();

if (isset($_REQUEST["enviarPlato1"])) {
    $plato1 = $_REQUEST["plato1"];
    if(empty($plato1) == 1) {
        $cookie->borrar1();
    } else {
        $cookie->guardarPlato1($plato1);
    }
}
?>