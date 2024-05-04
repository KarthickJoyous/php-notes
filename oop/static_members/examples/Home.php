<?php

class Home
{
    /*  
        - Static initializer

        - Instance of an Class can be created with a name instead of (new Class). 
    */
    public static function build()
    {

        return new static;
    }

    public function bedroom()
    {

        return "Bedroom";
    }

    public function kitchen()
    {

        return "Kitchen";
    }

    public function hall()
    {

        return "Hall";
    }

    public function restroom()
    {

        return "Restroom";
    }
}

$home = Home::build();

echo $home->bedroom() . PHP_EOL;

echo $home->kitchen() . PHP_EOL;

echo $home->hall() . PHP_EOL;

echo $home->restroom() . PHP_EOL;
