<?php

/*
    Created a class called User.

    It has 3 properties defined with different access modifiers.

    Properties - $name, $dob, $password.

    The value of $name can be accessed (OR) modified from anywhere.

    The value of $dob can be only accessed (OR) modified within the class (OR) it's sub-class.

    The value of $password can be only accessed (OR) modified within the class.
*/

class User {

    public $name;

    protected $dob;

    private $password;

    public function __construct($name, $dob, $password)
    {
        $this->name = $name;

        $this->dob = $dob;

        $this->password = $password;
    }

    /*
        Note : $password is private, but still it can be accessed (OR) modified in this way. Same for $dob (protected).

        By creating a getter & setter methods for a property, we can control it's access.
    */

    public function getPassword() {

        return $this->password;
    }

    public function setPassword($password) {

        return $this->password = $password;
    }
}

$user = new User("Karthick", "19/11/1999", "tyhf#2^(0");

/*
    Trying to access the properties.

    echo $user->name; // Karthick ✅

    echo $user->dob; // PHP Fatal error:  Uncaught Error: Cannot access protected property User::$dob ❌

    echo $user->password; // PHP Fatal error:  Uncaught Error: Cannot access private property User::$password ❌

    <-------------------------------------------------------------------------------------------------------------->

    $user->name (OR) $user->name = "RED" ✅

    $user->dob (OR) $user->dob = "20/11/1999" ❌ | $user->password (OR) $user->password = "yuj$5)1<o" ❌
*/