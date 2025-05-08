<?php

// 1. Class & Properties (Encapsulation)
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
        return "Brand: {$this->brand}, Speed: {$this->speed} km/h";
    }
}

// 2. Inheritance
class Car extends Vehicle {
    private $fuel;

    public function __construct($brand, $speed, $fuel) {
        parent::__construct($brand, $speed);
        $this->fuel = $fuel;
    }

    // 3. Polymorphism (overriding)
    public function getDetails() {
        return parent::getDetails() . ", Fuel: {$this->fuel}%";
    }
}

// 4. Object Instantiation
$vehicle = new Vehicle("Generic", 40);
$car = new Car("Toyota", 60, 80);

// 5. Using Methods
$vehicle->accelerate(20);
$car->accelerate(30);

// 6. Output
echo $vehicle->getDetails() . "<br>";
echo $car->getDetails();

?>
