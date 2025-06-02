<?php

class Employee {
    public $name;
    public $salary;

    public function __construct($name, $salary) {
        $this -> name = $name;
        $this -> salary = $salary;
    }

    public function getInfo() {
        return "{$this->name} {$this->salary}";
    }
}

class Manager extends Employee {
    public function work() {
        print("{$this -> name} управляет командой<br>");
    }
}

class Developer extends Employee {
    public function work() {
        print("{$this -> name} пишет код<br>");
    }
}

class Designer extends Employee {
    public function work() {
        print("{$this -> name} рисует лого<br>");
    }
}

$manager = new Manager("Иван", 70000);
$manager->getInfo();
$manager->work();

$developer = new Developer("Егор", 600000);
$developer->getInfo();
$developer->work();

$designer = new Designer("Ирина", 120000);
$designer->getInfo();
$designer->work();