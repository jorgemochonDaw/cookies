<?php

namespace App;

class Cookies
{
    function guardarPlato1($plato1)
    {
        setcookie("plato1", $plato1);
    }

    function borrar() {
         unset($_COOKIE['plato1']);
    }

    function mostrarPlato1()
    {
        return "Plato1: " . $_COOKIE["plato1"];
    }

    function guardarPlato2($plato2)
    {
        setcookie("plato2", $plato2);
    }

    function mostrarPlato2()
    {
        return  "Plato2: " . $_COOKIE["plato2"];
    }

    function guardarPostre($postre)
    {
        setcookie("postre", $postre);
    }

    function mostrarPostre()
    {
        return   "Postre: " . $_COOKIE["postre"];
    }
}
