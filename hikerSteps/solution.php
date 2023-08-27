<?php



function countingValleys ($steps, $path){

    $mountainsCount = 0;
    $valleysCount = 0;
    $dCount = 0;
    $uCount = 0;

    $steps = str_split($path);
    $startingStep = $steps[0];

//count the steps made
    foreach ($steps as $step){
        //reset the starting character after getting back to sea level
        if ($dCount === 0 and $uCount === 0){
            $startingStep = $step;
        }

        if ($step === "D"){
            $dCount += 1;
        }else if ($step === "U"){
            $uCount += 1;
        }
        // determine the number of valleys and mountains hiked
        if ($dCount === $uCount){
            //valley
            if ($startingStep === "D"){
                $valleysCount += 1;
            } //mountain
            elseif ($startingStep === "U"){
                $mountainsCount += 1;
            }
            $dCount = 0;
            $uCount = 0;
        }
    }

 return $valleysCount;
}

var_dump(countingValleys(8, "UDDDUDUU"));



