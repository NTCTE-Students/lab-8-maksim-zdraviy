<?php

class Animal {
    public $name;
    public $habitat;

    public function __construct($name, $habitat) {
        $this->name = $name;
        $this->habitat = $habitat;
    }

    public function getInfo() {
        return "{$this->name} живет в {$this->habitat}";
    }

    public function eat() {
        echo "{$this->name} ест.<br>";
    }

    public function sleep() {
        echo "{$this->name} спит.<br>";
    }
}

class Bird extends Animal {
    public function fly() {
        echo "{$this->name} летит.<br>";
    }
}

class Fish extends Animal {
    public function swim() {
        echo "{$this->name} плывет.<br>";
    }
}

class Mammal extends Animal {
    public function run() {
        echo "{$this->name} бежит.<br>";
    }
}

$bird = new Bird("Орел", "горы");
$bird->eat();
$bird->fly();

$fish = new Fish("Акула", "океан");
$fish->sleep();
$fish->swim();

$mammal = new Mammal("Лев", "саванна");
$mammal->eat();
$mammal->run();