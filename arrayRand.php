<?php

function arrayRand()
{
    $array = [];
    for($i = 1 ; $i<=20; $i++) {
        $array[] = rand(1,10);
    }
    $arrayS ='';
    foreach($array as $key => $value) {
        $arrayS .= " $value,";
    }
    
    $arr = array_count_values($array);
    $nr = '';

    foreach ($arr as $key => $value) {
        if($value == 1) {
            $nr .= " $key,";
        }
    }

    $arraySorteado = "Array sorteado = [" . $arrayS . "]" . PHP_EOL;
    $naoRepete = "Os números que não se repetem são: [" . $nr. "]". PHP_EOL;

    return $arraySorteado . $naoRepete;

}

echo arrayRand();