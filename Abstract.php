<?php

abstract class AchivementType{
    public function name(){
        $class = (new ReflectionClass($this))->getShortName();

        return preg_replace("/[A-Z]/", " $0", $class);
    }
    abstract function qualifier();
}

class FirstThousandPoints extends AchivementType
{
    function qualifier()
    {
        return "qualifier";
    }
}

$firstThousandPoint = new FirstThousandPoints();

echo $firstThousandPoint->name();