<?php

function makeAnagram($a, $b)
{
    //convert string to arrays
    $aArr = str_split($a);
    $bArr = str_split($b);

// find the frequency of occurrence of each character set in both arrays
    $aFrequency = array_count_values($aArr);
    $bFrequency = array_count_values($bArr);
    $count = 0;

    // find the difference in the frequencies of occurrence
    foreach ($aFrequency as $key => $value) {
        if(array_key_exists($key, $bFrequency)) {
            $count += abs($value - $bFrequency[$key]);
            unset($bFrequency[$key]);
        } else {
            //sum all a values that are not in b
            $count += $value;
        }
    }
//sum of all b values that are not in a 
    foreach ($bFrequency as $value) {
        $count += $value;
    }
    return $count;
}
   var_dump( makeAnagram('fcrxzwscanmligyxyvym', 'jxwtrhvujlmrpdoqbisbwhmgpmeoke'));

