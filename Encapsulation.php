<?php

class Person{

    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function job(){
        return "Software Developer";
    }

    private function secretThings()
    {
        return "My secret things";
    }
}

$person = new Person('ZMM');
// echo $person->secretThings();

/**
 * Call private method 
 */
$method = new ReflectionMethod(Person::class, 'secretThings');
$method->setAccessible(true);

echo $method->invoke($person);