<?php

namespace NumberOfZeroFilledSubArrays;

class Solution
{

    function zeroFilledSubarray($nums): int
    {
        $nums[] = 1;
        $ans = $count = 0;
        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] == 0) {
                $count++;
                continue;
            }
            if ($count > 0) {
                $ans += $count*($count+1)/2;
                $count = 0;
            }
        }
        return $ans;
    }

}

$solution = new Solution();
define("NumberOfZeroFilledSubArrays\sum", $solution->zeroFilledSubarray([0, 0, 0, 0, 0, 5]));
var_dump(sum);
