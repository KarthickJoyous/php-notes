<?php

/*
    Class Dog is not implemeted sound(), so it should be declared as an abstract & it's sub-class should implement sound().

    If there are no sub-classes created for Dog, then no use the class DOG as it cannot instantiate.

    Dog is a sub-class of animal, but here it declared as an abstract so it has all the behavious of abstract.
*/

abstract class Animal {

    abstract public function sound();

    abstract public function emoji();
}

abstract class Dog extends Animal {

    abstract public function breed(); // Signature in sub-class ✅

    public function emoji()
    {
        return "🐕";
    }
}

class Pomeranian extends Dog {

    public function sound()
    {
        return "Vow Vow!";
    }

    public function breed()
    {
        return "Pomeranian";
    }
}

$pomeranian = new Pomeranian();

echo $pomeranian->sound() . PHP_EOL;

echo $pomeranian->emoji() . PHP_EOL;

echo $pomeranian->breed() . PHP_EOL;