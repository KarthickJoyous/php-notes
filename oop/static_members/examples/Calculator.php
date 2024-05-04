<?php

class Calculator {

    public static $operations = ["+", "-", "*", "%"];

    public static function intro() {

        /*
            accessing static property inside the same class.
        */

        return "Hello, I'm calculator. I can do these operations (" . implode(", ", self::$operations) . ")";

        // $this->operations; ❌ | Cannot use '$this' in non-object context.
    }

    private static function add($a, $b) {

        return $a + $b;
    }

    public static function addition($a, $b) {

        /*
            accessing static method inside the same class.
        */

        return self::add($a, $b);

        // $this->add($a, $b); ❌ | Cannot use '$this' in non-object context.
    }

    public static function substraction($a, $b) {

        return $a - $b;
    }

    public static function multiplication($a, $b) {

        return $a * $b;
    }

    public static function division($a, $b) {

        return $a / $b;
    }

    public function introduction() {

        return "Hello, I'm calculator. I can do these operations (" . implode(", ", self::$operations) . ")";
    }
}

    /*
        intro() can be accessed directly like this, without creating an instance.
    */

    echo Calculator::intro() , PHP_EOL;

    echo Calculator::addition(rand(1, 1000), rand(1001, 2000)) , PHP_EOL;

    /*
        This will also work.
    */

    $calculator = new Calculator;

    echo $calculator->addition(rand(1, 1000), rand(1001, 2000)) . PHP_EOL;

    /*
        Trying to call a non-static member statically.

        echo Calculator::introduction(); ❌ | Non static method 'introduction' should not be called statically
    */
