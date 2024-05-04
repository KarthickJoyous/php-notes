<?php

trait Media {

    public function generateName() {
        
        return mt_rand();
    }
}

class Image {

    use Media;

    public function upload() {

        return "Image uploaded with name : " . $this->generateName();
    }
}

class Video {

    use Media;

    public function upload() {

        return "Video uploaded with name : " . $this->generateName();
    }
}

class Audio {

    use Media;

    public function upload() {

        return "Audio uploaded with name : " . $this->generateName();
    }
}

class Document {

    use Media;

    public function upload() {

        return "Document uploaded with name : " . $this->generateName();
    }

    /*
        Even the trait (Media) has generateName(), we can create a same method in the class (With / Without Args).
        Instead of trait (Media) method, class (Document) method will be called.
    */

    public static function generateName() {

        return "document-".rand(1000000, 100000000);
    }
}

echo (new Image)->upload() . PHP_EOL;

echo (new Video)->upload() . PHP_EOL;

echo (new Audio)->upload() . PHP_EOL;

echo (new Document)->upload() . PHP_EOL;