<?php

class Food {

    public function __construct()
    {   
        echo "Preparing food." . PHP_EOL;
    }

    public function __destruct()
    {
        echo "Food prepared." . PHP_EOL;
    }
}

new Food;

echo '-----------------' . PHP_EOL;

class Biriyani extends Food {

    public function __construct()
    {   
        echo "Preparing Biriyani." . PHP_EOL;
    }

    public function __destruct()
    {   
        echo "Biriyani prepared." . PHP_EOL;
        parent::__destruct();
    }
}

new Biriyani;