<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m,$nums2,$n)
    {
        $nums1 = array_slice($nums1, 0, $m);
        $nums1 = array_splice($nums1, 0,$m);
        $nums2 = array_slice($nums2, 0, $n);
        $newArray = array_merge($nums1, $nums2);
        sort($newArray);
        return $newArray;
    }
}

$sol = new Solution;
$merger  = $sol->merge([1,2,3,0,0,0],3, [2,5,6],3 );
var_dump($merger);




