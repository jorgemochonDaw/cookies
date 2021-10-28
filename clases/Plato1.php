<section>
    <form action="" method="post">
        <label for="plato1">Plato 1: </label>
        <input type="text" name="plato1"> <br> <br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <?php
    if (isset($_POST["enviar"])) {
        $plato1 = $_POST["plato1"];
        $cookie->cookiePlato1($plato1);
    }
    ?>