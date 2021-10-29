<section>
    <form action="" method="post">
        <label for="postre">Postre: </label>
        <input type="text" name="postre">
        <input type="submit" name="enviarPostre" value="Enviar"> <br> <br>
        <a href="http://localhost/php/cookies/clases/Menu.php">Mostrar menu</a>
    </form>
</section>

<?php
require './../vendor/autoload.php';

use App\Cookies;

$cookie = new Cookies();
echo $cookie->mostrarPlato1();
echo "<br>";
echo $cookie->mostrarPlato2();
if (isset($_POST["enviarPostre"])) {
    $postre = $_POST["postre"];
    $cookie->guardarPostre($postre);
}
?>