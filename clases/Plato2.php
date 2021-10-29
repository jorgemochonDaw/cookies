<section>
    <form action="" method="post">
        <label for="plato2">Plato 2: </label>
        <input type="text" name="plato2">
        <input type="submit" name="enviarPlato2" value="Enviar"> <br> <br>
        <a href="http://localhost/php/cookies/clases/Postre.php">Siguiente</a> <br>
        <a href="http://localhost/php/cookies/clases/Plato1.php">Volver a plato 1</a>
    </form>
</section>

<?php
require './../vendor/autoload.php';

use App\Cookies;

$cookie = new Cookies();
echo $cookie->mostrarPlato1();
if (isset($_REQUEST["enviarPlato2"])) {
    $plato2 = $_REQUEST["plato2"];
    if(empty($plato2) == 1) {
        $cookie->borrar2();
    } else {
    $cookie->guardarPlato2($plato2);
    }
}
?>