<?php

/*
    Class name is Fruit.

    It's properties are $name & $color.

    It has a method called about().

    We can create as many properties & methods as we want.
*/

class Fruit {

    public $name;

    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;

        $this->color = $color;
    }

    public function about() {

        return "My name is $this->name. My color is $this->color.";
    }
}

/*
    An object is created for Fruit.

    As an object has all the properties & method defined in the class, we call access all of it.
*/

$apple = new Fruit("Apple", "Red");

echo $apple->name . PHP_EOL; // Apple

echo $apple->color . PHP_EOL; // Red

echo $apple->about(); // My name is Apple. My color is Red.