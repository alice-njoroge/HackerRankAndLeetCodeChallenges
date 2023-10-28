<?php

function maximumToys($prices, $k): int
{
    $n = count($prices);
    $sum = 0;
    $items = 0;

    sort($prices);

    for ($i = 0; $i < $n; $i++) {
        $sum += $prices[$i];
        if ($sum > $k) {
            break;
        }
        $items += 1;


    }
    return $items;

}

$prices = [1, 12, 5, 111, 200, 1000, 10];
$k = 50;
var_dump(maximumToys($prices, $k));




