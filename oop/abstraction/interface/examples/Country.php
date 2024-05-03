<?php

    /*
        All the methods / signatures of interface must be public.

        public function name(); ✅
        
        protected function name(); ❌ | private function name(); ❌ - (Error - Access type for interface method Country::name() must be public)
    */

interface Country {

    public function name();

    public function flag();

    public function continent();
}

    /*
        All the classes that implements Country should have name(), flag() & continent().
    */

class India implements Country {

    public function name()
    {
        return "India";
    }

    public function flag()
    {
        return "🇮🇳";
    }

    public function continent()
    {
        return "Asia";
    }
}

class Norway implements Country {

    public function name()
    {
        return "Norway";
    }

    public function flag()
    {
        return "🇳🇴";
    }

    public function continent()
    {
        return "Europe";
    }
}

$countries = [new India(), new Norway()];

foreach($countries as $country) {

    echo $country->name() . PHP_EOL;

    echo $country->flag() . PHP_EOL;

    echo $country->continent() . PHP_EOL;
}