<?php

function hourglassSum($arr)
{
    //extract all the hourly glasses possible
    //find the sum of each hourly glass
    //find the max sum
    $sum = [];

    for ($i = 0; $i < count($arr) - 2; $i++) {
        for ($j = 0; $j < count($arr[$i]) - 2; $j++) {
            $currSum = $arr[$i][$j] + $arr[$i][$j + 1] + $arr[$i][$j + 2] + $arr[$i + 1][$j + 1] + $arr[$i + 2][$j] + $arr[$i + 2][$j + 1] + $arr[$i + 2][$j + 2];
            $sum[] = $currSum;
        }
    }

    return max($sum);

}

var_dump(hourglassSum([[1, 1, 1, 0, 0, 0], [0, 1, 0, 0, 0, 0], [1, 1, 1, 0, 0, 0], [0, 0, 2, 4, 4, 0],
    [0, 0, 0, 2, 0, 0], [0, 0, 1, 2, 4, 0]]));





