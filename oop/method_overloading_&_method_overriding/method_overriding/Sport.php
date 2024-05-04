<?php

class Sport {

    public function intro() {

        return "I'm Sport.";
    }
}

class Cricket extends Sport {

    public function intro() {

        return "I'm Cricket.";
    }
}

echo (new Sport)->intro() . PHP_EOL; // I'm Sport.

echo (new Cricket)->intro() . PHP_EOL; // I'm Cricket.

/*
   Note : Cannot create a same method with different of number of arguments. ❌

   class Sport {

        public function intro() {

            return "I'm Sport.";
        }
    }

   class Cricket extends Sport {

        -- Method 'Cricket::intro()' is not compatible with method 'Sport::intro()' --

        public function intro($name) {

            return "I'm $name.";
        }
    }
*/