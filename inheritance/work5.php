<?php

class Device {
    public $brand;
    public $model;

    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function getInfo() {
        return "{$this->brand} {$this->model}";
    }
}

class Smartphone extends Device {
    public $os;

    public function __construct($brand, $model, $os) {
        parent::__construct($brand, $model);
        $this->os = $os;
    }

    public function call() {
        echo "{$this->brand} {$this->model} звонит...<br>";
    }
}

class Laptop extends Device {
    public $cpu;

    public function __construct($brand, $model, $cpu) {
        parent::__construct($brand, $model);
        $this->cpu = $cpu;
    }

    public function runProgram() {
        echo "Программа запущена на {$this->brand} {$this->model}<br>";
    }
}

class Tablet extends Device {
    public $screenSize;

    public function __construct($brand, $model, $screenSize) {
        parent::__construct($brand, $model);
        $this->screenSize = $screenSize;
    }

    public function watchVideo() {
        echo "Просмотр видео на {$this->brand} {$this->model}<br>";
    }
}

$phone = new Smartphone("Apple", "iPhone 15", "iOS");
echo $phone->getInfo() . ", ОС: " . $phone->os . "<br>";
$phone->call();

$laptop = new Laptop("Dell", "XPS 15", "Intel i7");
echo $laptop->getInfo() . ", процессор: " . $laptop->cpu . "<br>";
$laptop->runProgram();

$tablet = new Tablet("Samsung", "Galaxy Tab S8", 11);
echo $tablet->getInfo() . ", диагональ экрана: " . $tablet->screenSize . "<br>";
$tablet->watchVideo();