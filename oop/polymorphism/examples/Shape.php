<?php

    /*  
        Polymorphism using interface.

        Created a interface called Shape.

        Created a classes Circle, Rectangle.

        Circle & Rectangle both are different from each other, but it shared a common interface from Shape.
    */

interface Shape {
    public function calculateArea();
}

class Circle implements Shape {

    private $radius;

    public function __construct($radius) 
    {
        $this->radius = $radius;
    }

    public function calculateArea() 
    {
        return pi() * $this->radius * $this->radius;
    }
}

class Rectangle implements Shape {

    private $length;
    private $width;

    public function __construct($length, $width) 
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea() 
    {
        return $this->length * $this->width;
    }
}

class Square implements Shape {

    private $side;

    public function __construct($side) 
    {
        $this->side = $side;
    }

    public function calculateArea() 
    {
        return $this->side * $this->side;
    }
}

/*
    Each shape can have its own unique way of calculating area, 
    but this function remains unchanged even if more than a hundred types of shapes are added.

    This is Polymorphism (usign a variety of different objects in the same way).
*/

function area(Shape $shape) {
    echo $shape->calculateArea() . PHP_EOL;
}

area(new Circle(2));
area(new Rectangle(3, 5));
area(new Square(4));

return (new Shape())->calculateArea();