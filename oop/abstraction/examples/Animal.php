<?php

    /*
        Interface + Abstract
    */
interface Animal {

    public function name();

    public function sound();

    public function emoji();
}

abstract class BigCat implements Animal {

    protected function category() {

        return "BigCat";
    }
}

class Leopard extends BigCat {

    public function name() {

        return "Leopard";
    }

    public function sound() {

        return "Roaring...";
    }

    public function emoji() {

        return "🐆";
    }
}

$animal = new Leopard();

echo $animal->name() . PHP_EOL;

echo $animal->sound() . PHP_EOL;

echo $animal->emoji() . PHP_EOL;