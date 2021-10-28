<section>
<form action="" method="post">
    <label for="plato2">Plato 2: </label>
    <input type="text" name="plato2"> 
    <input type="submit" name="enviar" value="Enviar">
</form>
</section>

<?php
if (isset($_POST["enviarPlato2"])) {
    $plato2 = $_POST["plato2"];
}
?>