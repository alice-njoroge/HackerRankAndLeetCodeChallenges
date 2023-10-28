<?php

function countingValleys($steps, $path){
    $steps = str_split($path);
    $startingStep = $steps[0];

    $dCount = 0;
    $uCount = 0;
    $valleys = 0;

    foreach ($steps as $step){
        //reset the starting step if the hiker is back at sea level
        if ($uCount === 0 &&  $dCount === 0){
            $startingStep = $step;
        }

        //count the steps made
        if ($step === "D"){
            $dCount ++;
        } else if ($step === "U"){
            $uCount ++;
        }

        //determine if the hiker is back to sea level
        if ($dCount === $uCount){
            if ($startingStep === "D"){
                $valleys ++;
            }
            $dCount = 0;
            $uCount = 0;
        }
    }

    return $valleys;
}

var_dump(countingValleys(8, "UDDDUDUU"));