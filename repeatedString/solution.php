<?php

function repeatedString($s, $n){
    if (substr_count($s, 'a', 0, strlen($s)) === 0){
        return 0;
    }

    if (strlen($s) === 1){
        return $n;
    }

   do{
       $s .= $s;
   } while(strlen($s) <= $n);

    return substr_count($s, 'a', 0, $n);

}
var_dump(repeatedString('kmretasscityylpdhuwjirnqimlkcgxubxmsxpypgzxtenweirknjtasxtvxemtwxuarabssvqdnktqadhyktagjxoanknhgilnm', 736778906400));




