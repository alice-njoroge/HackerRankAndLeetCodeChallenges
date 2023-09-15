<?php

function nStatus($N){
    $mod = $N % 2;
    if ($mod === 1){
        echo "Weird" . PHP_EOL;
    }
    if ($mod === 0  && $N >= 2 && $N <= 5){
        echo "Not Weird" .  PHP_EOL;
    }
    if ($mod === 0  && $N >= 6 && $N <= 20){
        echo "Weird" .  PHP_EOL;
    }
    if ($mod === 0  && $N > 20){
        echo "Not Weird" .  PHP_EOL;
    }
}
nStatus(24);
