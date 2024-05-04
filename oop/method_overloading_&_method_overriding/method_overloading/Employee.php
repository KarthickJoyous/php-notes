<?php

    /*
        Method overloading with Static members.
    */

class Employee
{

    private static $methods = ['intro'];

    public static function __callStatic($name, $arguments)
    {
        if (!in_array($name, self::$methods)) {

            throw new Exception("Invalid methods called $name");
        }

        switch ($arguments_count = count($arguments)) {
            case 0:
                $result = self::intro();
            break;

            case 1:
                $result = self::introWithName($arguments[0]);
            break;

            default:
                throw new Exception("Too many arguements (" . $arguments_count . ")");
        }

        return $result;
    }

    private static function intro()
    {

        return 'Hi, Im Employee.';
    }

    private static function introWithName($name)
    {

        return "Hi, My name is $name.";
    }
}

echo Employee::intro() . PHP_EOL; // Hi, I'm Student.

echo Employee::intro("Karthick") . PHP_EOL; // Hi, My name is Karthick.