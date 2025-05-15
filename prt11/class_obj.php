<?php

class Vehicle {
    protected $brand;
    protected $speed;

    public function __construct($brand, $speed = 0) {
        $this->brand = $brand;
        $this->speed = $speed;
    }

    public function accelerate($amount) {
        $this->speed += $amount;
    }

    public function getDetails() {
        return "Brand: $this->brand, Speed: $this->speed km/h";
    }
}

class Car extends Vehicle {
    private $fuel;

    public function __construct($brand, $speed, $fuel) {
        parent::__construct($brand, $speed); 
        $this->fuel = $fuel; 
    }

    public function getDetails() {
        return parent::getDetails() . ", Fuel: $this->fuel%";
    }
}

$vehicle = new Vehicle("Bike", 30);
$car = new Car("Honda", 50, 70);

$vehicle->accelerate(10); 
$car->accelerate(20);     

echo $vehicle->getDetails() . "<br>";
echo $car->getDetails();

?>
