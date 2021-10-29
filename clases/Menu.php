<?php
require './../vendor/autoload.php';

use App\Cookies;

$cookie = new Cookies();
?>

<header>
    <h1>Menu: </h1>
</header>

<main>
    <section>
        <ul>
            <li><?php echo $cookie->mostrarPlato1(); ?></li>
            <li><?php echo $cookie->mostrarPlato2(); ?></li>
            <li><?php echo $cookie->mostrarPostre(); ?></li>
        </ul>
    </section>
    <a href="http://localhost/php/cookies/clases/Plato1.php">Volver a plato 1</a> <br>
    <a href="http://localhost/php/cookies/clases/Plato2.php">Volver a plato 2</a> <br>
    <a href="http://localhost/php/cookies/clases/Postre.php">Volver a postre</a>
</main>