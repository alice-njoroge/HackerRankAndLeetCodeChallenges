<?php

$n = 9;
$color = [10, 20, 20, 10, 10, 30, 50, 10, 20];

function sockMerchant($n, $ar)
{
    $colors=  array_count_values($ar);
    $sum = 0;

    foreach ($colors as $color){
        $quotient = (int) ($color / 2);
        $sum += $quotient;
    }

  return $sum;

}

var_dump(sockMerchant(7, $color));




