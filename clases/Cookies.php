<?php

namespace App;

class Cookies
{
    function cookiePlato1($plato1)
    {
        setcookie("plato1_cookie", $plato1);
        echo "Plato1: " . $_COOKIE["plato1_cookie"];
    }

    function cookiePlato2($plato2)
    {
        setcookie("postre_cookie", $plato2);
        echo "Postre: " . $_COOKIE["plato2_cookie"];
    }

    function cookiePlato3($postre)
    {
        setcookie("postre_cookie", $postre);
        echo "Postre: " . $_COOKIE["postre"];
    }
}