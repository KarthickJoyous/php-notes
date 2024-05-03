<?php

    /*
        TMDB - https://www.themoviedb.org

        Created a class called TMDB (Parent / Super Class).
            - Makes an API call to TMDB.
            - Keeping as abstract to not instantiate.
        
        Created classes Movie & Person (Child / Sub Class).
            - These classes are extending TMDB & inheriting parent's non-private behaviours (Properties & Methods).
    */
abstract class TMDB {

    protected $methods = [
        'get' => "GET",
        'post' => "POST"
    ];

    private $keys = [
        'url' => 'https://api.themoviedb.org/3',
        'bearer' => 'uOLN32YgFHXV01EsdqqiMHoeiPlh18VsrypmBCXg3Xhwqn8Eji'
    ];

    protected function fetch($method, $endpoint) {

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $this->keys['url'] . $endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);

        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer ' . $this->keys['bearer'],
            'Content-Type: application/json'
        ]);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }

        curl_close($ch);

        return $response;
    }
}

class Movie extends TMDB {

    private $endpoint = "/movie";

    public function popular() {

        return $this->fetch($this->methods['get'], "$this->endpoint/popular");
    }

    public function topRated() {

        return $this->fetch($this->methods['get'], "$this->endpoint/top_rated");
    }

    public function upcoming() {

        return $this->fetch($this->methods['get'], "$this->endpoint/upcoming");
    }

    public function get($movieId) {

        return $this->fetch($this->methods['get'], "$this->endpoint/$movieId");
    }
}

$movie = new Movie();

print_r($movie->popular());
print_r($movie->topRated());
print_r($movie->upcoming());
print_r($movie->get(rand(1, 1000)));

class Person extends TMDB {

    private $endpoint = "/person";

    public function popular() {

        return $this->fetch($this->methods['get'], "$this->endpoint/popular");
    }

    public function get($personId) {

        return $this->fetch($this->methods['get'], "$this->endpoint/$personId");
    }
}

$person = new Person();

print_r($person->popular());
print_r($person->get(rand(1, 1000)));