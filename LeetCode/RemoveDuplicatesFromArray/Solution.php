<?php

namespace RemoveDuplicatesFromArray;

class Solution
{
    public function removeDuplicates($nums): array
    {
        return array_unique($nums);
    }

}
$sol = new Solution();
var_dump($sol->removeDuplicates([1,1,2]));