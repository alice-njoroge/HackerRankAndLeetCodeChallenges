<?php

function alternatingCharacters($s): int
{
    $sArr = str_split($s);
    $count = 0;

    for ($i = 0; $i < count($sArr) - 1; $i++) {
        if ($sArr[$i] === $sArr[$i + 1]) {
            $count += 1;
        }
    }

    return $count;

}

var_dump(alternatingCharacters('AAAAA'));