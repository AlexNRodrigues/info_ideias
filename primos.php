<?php

function primos($inicial, $final)
{
    $array = [];
    for ($i = $inicial + 1; $i < $final; $i++) {
        $divisores = 0;

        for ($j = $i; $j >= 1; $j--) {
            
            if (($i % $j) == 0) {
                $divisores++;
            }
        }

        if ($divisores == 2) {
            $array[] =  $i;
        }
    }

    return $array;
}

$inicial = 10;
$final = 29;
print_r( primos($inicial, $final));
