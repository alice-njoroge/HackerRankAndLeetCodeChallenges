<?php

// this class cannot be instantiated
namespace abstractClass;

use ReflectionClass;

abstract class AchievementType
{

    public function name(): string
    {
        $class =  (new ReflectionClass($this))->getShortName();
        return trim(preg_replace('/[A-Z]/',' $0', $class));

    }

    public function icon(): string
    {
        return strtolower(str_replace(' ', '-',$this->name())).'.png';
    }

    // method that is declared without an implementation (without braces, and followed by a semicolon)
    abstract public function qualifier();

}

class FirstThousandPoints extends AchievementType
{

    public function qualifier(){
        return "I am a user";

    }

}

$fk = new FirstThousandPoints();
echo $fk->name().PHP_EOL;
echo $fk->icon().PHP_EOL;
echo $fk->qualifier().PHP_EOL;