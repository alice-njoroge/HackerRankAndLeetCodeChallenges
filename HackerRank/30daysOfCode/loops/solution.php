<?php



function getMultiples($n): void
{
    for($i=1; $i<=10; $i++){
        $result = $i * $n;
        echo  $n . " x". " " . $i . " = ". $result . PHP_EOL ;
    }

}

$n = intval(trim(fgets(STDIN)));
getMultiples($n);
