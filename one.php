<?php

namespace MyNamespace;

class Car
{
  public $brand;
  public $model;
  public $year;

  public function __construct($brand, $model, $year)
  {
    $this->brand = $brand;
    $this->model = $model;
    $this->year = $year;
  }

  public function displayInfo()
  {
    echo "Brand: {$this->brand}, Model: {$this->model}, Year: {$this->year} <br />";
  }
}

$car1 = new Car("Hyundai", "Creta", 2022);
$car2 = new Car("Honda", "Amaze", 2023);

echo "Car1's brand: " . $car1->brand . "<br />";

$car1->displayInfo();

$car2->displayInfo();

?>
