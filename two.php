<?php

namespace MyNamespace;

class Car
{
  public $brand;

    public function __construct($brand) {
       $this->brand = $brand;
    }

    public function getBrandName() {
        return $this->brand ;
    }

    public function setBrandName($newBrand) {
        $this->brand = $newBrand;
    }
}

$myData = new Car("Hyundai");

echo "Current Brand: " . $myData->getBrandName() . "<br>";

$myData->setBrandName("Honda");

echo "Updated Brand: " . $myData->getBrandName() ;

?>

