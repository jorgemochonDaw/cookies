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
</main>