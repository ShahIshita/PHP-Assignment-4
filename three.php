<?php

namespace MyNamespace;

class Vehicle
{
    public $brand;
    public $model;

    public function __construct($brand, $model)
    {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function display()
    {
        echo "Vehicle: {$this->brand}, Model: {$this->model}";
    }
}

class Car extends Vehicle
{
    private $numDoors;

    public function __construct($brand, $model, $numDoors)
    {
        parent::__construct($brand, $model);
        $this->numDoors = $numDoors;
    }

    public function displayCar()
    {
        parent::display(); 
        echo ", Doors: {$this->numDoors} <br />";
    }
}

$car = new Car("Hyundai", "Creta", 4);

$car->displayCar();

?>
