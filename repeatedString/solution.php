<?php
function repeatedString($s, $n)
{
    $strLen = strlen($s);
    $quotient = (int) ($n / $strLen);
    $remainder = $n % $strLen;

// count of 'a' in a complete string aka the quotient
    $count = substr_count($s, 'a');
    $totalCount = $count * $quotient;

// count of 'a' in the remainder
    if ($remainder > 0){
        $totalCount += substr_count($s, 'a',0,$remainder);
    }
    return $totalCount;
}

var_dump(repeatedString('kmretasscityylpdhuwjirnqimlkcgxubxmsxpypgzxtenweirknjtasxtvxemtwxuarabssvqdnktqadhyktagjxoanknhgilnm', 736778906400));














