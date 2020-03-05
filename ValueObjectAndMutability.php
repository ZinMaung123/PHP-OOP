<?php

class Age
{
    public $age;

    public function __construct($age)
    {
        if($age < 0 || $age > 120){
            throw new InvalidArgumentException("Non sense age!");
        }
        $this->age = $age;
    }

    public function __destruct()
    {
        if($this->age < 0 || $this->age > 120){
            throw new InvalidArgumentException("Non sense age!");
        }
    }
}

function register(string $name, Age $age){
    
}

try{
    $age = new Age(200);
}catch(InvalidArgumentException $e){
    echo $e->getMessage();
}

// $age->age = 200;

// var_dump($age);

// register("ZMM", $age);