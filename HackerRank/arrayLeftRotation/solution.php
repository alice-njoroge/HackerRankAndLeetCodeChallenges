<?php

function rotLeft($a, $d){
    for ($i = 0; $i < $d; $i++) {
        $var = array_shift($a);
        $a[] = $var;

    }
 return $a;
}

var_dump(rotLeft([1, 2, 3, 4, 5], 4));


