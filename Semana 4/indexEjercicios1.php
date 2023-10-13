<?php

function triangle_area($base, $height)
{

    return $base * $height / 2;
}

echo triangle_area(5, 4) . "<br>";


function factorial($n)
{

    if ($n <= 1) {

        return 1;
    }

    return $n * factorial($n - 1);
}

echo factorial(10) . "<br>";

function prime_number($numero)
{
    if (!is_numeric($numero)) //Se comprueba que el dato sea un numero
        return false;

    for ($i = 2; $i < $numero; $i++) {

        if (($numero % $i) == 0) {

            //como su residuo da cero con 3 o mas numeros el numero no es primo
            return false;
        }
    }

    //Si su numero tiene solo 2 residuos 0 es primo
    return true;
}
echo prime_number(5) . "<br>";
