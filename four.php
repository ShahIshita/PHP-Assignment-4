<?php

namespace MyNamespace;

interface Shape
{
    public function countArea();
}

class Circle implements Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function countArea()
    {
        return pi() * $this->radius * $this->radius;
    }
}

class Rectangle implements Shape
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function countArea()
    {
        return $this->width * $this->height;
    }
}

$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

echo "Area of Circle: " . $circle->countArea() . "<br />";
echo "Area of Rectangle: " . $rectangle->countArea() . "<br />";

?>
