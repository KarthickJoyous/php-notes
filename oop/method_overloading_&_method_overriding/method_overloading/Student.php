<?php

    /*
        Cannot declare two / more methods with same name / with different arguments. ❌ | Cannot redeclare Student::intro()
    */

// class Student {

//     public function intro() { ❌

//         return "I'm student.";
//     }

//     public function intro($name) { ❌

//         return "I'm student. My name is $name";
//     }
// }

    /*
        Acheiving method overloading (indirectly). ✅
    */

class Student
{

    private $methods = ['intro'];

    public function __call($name, $arguments)
    {
        if (!in_array($name, $this->methods)) {

            throw new Exception("Invalid methods called $name");
        }

        switch ($arguments_count = count($arguments)) {
            case 0:
                $result = $this->intro();
                break;

            case 1:
                $result = $this->introWithName($arguments[0]);
                break;

            default:
                throw new Exception("Too many arguements (" . $arguments_count . ")");
        }

        return $result;
    }

    private function intro()
    {

        return 'Hi, Im Student.';
    }

    private function introWithName($name)
    {

        return "Hi, My name is $name.";
    }
}

echo (new Student)->intro() . PHP_EOL; // Hi, I'm Student.

echo (new Student)->intro("Karthick") . PHP_EOL; // Hi, My name is Karthick.