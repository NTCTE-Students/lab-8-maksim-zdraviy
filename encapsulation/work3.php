<?php

class Thermostat {
    private $temperature;

    public function __construct($initialTemp = 20) {
        $this->setTemperature($initialTemp);
    }

    public function getTemperature() {
        echo "Температура на данный момент ".$this->temperature;
    }

    public function setTemperature($newTemp) {
        if ($newTemp >= -30 && $newTemp <= 30) {
            $this->temperature = $newTemp;
            echo "Температура установлена на ".$newTemp."</br>";
        } else {
            echo "Температура не установлена </br>";
        }
    }

    public function increaseTemp($amount = 1) {
        $newTemp = $this->temperature + $amount;
        return $this->setTemperature($newTemp);
    }
}

$thermo = new Thermostat(22);
$thermo->setTemperature(-10);
$thermo->setTemperature(35);