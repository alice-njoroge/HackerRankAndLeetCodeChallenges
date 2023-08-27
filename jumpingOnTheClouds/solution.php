<?php

function jumpingOnClouds($c){
    $jumps = 0;
    $position = 0;
    $len = count($c);

    while ($position < $len - 1){
        //make a safe jump i.e avoid the thunderheads
        if ($position + 2 < $len   && $c[$position + 2] === 0 ){
            $position += 2;
        }
        elseif ($position + 2 === 1){
            break;
        }
        else{
            $position += 1;
        }
        $jumps ++;

    }
    return $jumps;
}

var_dump( "final" , jumpingOnClouds([0, 1, 0, 0, 0, 1, 0]));
