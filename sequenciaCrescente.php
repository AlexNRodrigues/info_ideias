<?php

function SequenciaCrescente($array, $tamanho)
{
    $contador = 0;

    $indice = -1;

    for ($i = 1; $i < $tamanho; $i++) {
        if ($array[$i - 1] >= $array[$i]) {
            $contador++;

            $indice = $i;
        }
    }

    if ($contador > 1) {
        return false;
    }

    if ($contador == 0) {
        return true;
    }

    if ($indice == $tamanho - 1 || $indice == 1) {
        return true;
    }

    if ($array[$indice - 1] < $array[$indice + 1]) {
        return true;
    }

    if ($array[$indice - 2] < $array[$indice]) {
        return true;
    }

    return false;
}

// Retirar os comentários no array para realizar os testes

$array = [1, 3, 2, 1];
// $array = [1, 3, 2];
// $array = [1, 2, 1, 2];
// $array = [3, 6, 5, 8, 10, 20, 15];
// $array = [1, 1, 2, 3, 4, 4]; 
// $array = [1, 4, 10, 4, 2];
// $array = [10, 1, 2, 3, 4, 5];
// $array = [1, 1, 1, 2, 3]; 
// $array = [0, -2, 5, 6];
// $array = [1, 2, 3, 4, 5, 3, 5, 6];
// $array = [40, 50, 60, 10, 20, 30];
// $array = [1, 1];
// $array = [1, 2, 5, 3, 5];
// $array = [1, 2, 5, 5, 5];
// $array = [10, 1, 2, 3, 4, 5, 6, 1];
// $array = [1, 2, 3, 4, 3, 6];
// $array = [1, 2, 3, 4, 99, 5, 6];
// $array = [123, -17, -5, 1, 2, 3, 12, 43, 45];
// $array = [3, 5, 67, 98, 3];

$tamanho = count($array);

if (SequenciaCrescente($array, $tamanho)) {
    echo "True";
} else {
    echo "False";
}
