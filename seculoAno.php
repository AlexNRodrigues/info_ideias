<?php

function seculoAno($ano)
{
    if($ano <= 99) {
        return 1;
    }

    if(strlen($ano) > 3) {
        $seculo = substr($ano, 0, 2);
    } else {
        $seculo = substr($ano, 0, 1);
    }
    $final = substr($ano, -2);

    if($final === '00') {
        return $seculo;
    } else {
        return $seculo + 1;
    }
}


// echo seculoAno(1700);
echo seculoAno(1905);