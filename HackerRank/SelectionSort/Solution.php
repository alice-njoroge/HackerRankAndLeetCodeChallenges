<?php

namespace SelectionSort;

class Solution
{
    //not done yet!!
    public function sortSelection($arr): int
    {
        $n = count($arr);
        $count = 0;
        for ($i = 0; $i < $n-1; $i++) {
            for ($j = $i + 1; $j < $n; $j++) {
                $minimum = $i;
                if ($arr[$j] < $arr[$minimum]) {
                    $minimum = $j;

                    $temp = $arr[$minimum];
                    $arr[$minimum] = $arr[$i];
                    $arr[$i] = $temp;
                    $count++;
                    var_dump("arr", $arr);
                }
            }
        }
        return  $count;
    }
}

$sort = new Solution();
var_dump($sort->sortSelection([1, 4, 3, 2]));