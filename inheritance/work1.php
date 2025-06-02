<?php

class Vehicle {
    public $make;
    public $model;
    public $year;

    public function __construct($make, $model, $year) {
        $this -> make = $make;
        $this -> model = $model;
        $this -> year = $year;
    }

    public function getInfo() {
        return "{$this->year} {$this->make} {$this->model}";
    }
}

class Car extends Vehicle {
    public $doors;

    public function __construct($make, $model, $year, $doors) {
        parent::__construct($make, $model, $year);
        $this -> doors = $doors;
    }
}

class Bike extends Vehicle {
    public $type;

    public function __construct($make, $model, $year, $type) {
        parent::__construct($make, $model, $year);
        $this -> type = $type;
    }
}

class Truck extends Vehicle {
    public $loadCapacity;

    public function __construct($make, $model, $year, $loadCapacity) {
        parent::__construct($make, $model, $year);
        $this -> loadCapacity = $loadCapacity;
    }
}

$car = new Car("Toyota", "Camry", 2020, 4);
echo $car->getInfo() . " двери: " . $car->doors . "</br>";

$bike = new Bike("Giant", "Talon", 2021, "mountain");
echo $bike->getInfo() . " тип: " . $bike->type . "</br>";

$truck = new Truck("Volvo", "FH16", 2019, 20);
echo $truck->getInfo() . " загруженность: " . $truck->loadCapacity . "\n";