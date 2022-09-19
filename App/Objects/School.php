<?php

namespace App\Objects;

class School {

    public string $name;
    public string $city;

    public function __construct(string $name, string $city) {
        $this->name = $name;
        $this->city = $city;
    }

    public function getName(): string {
        return $this->name;
    }
    public function setName(string $name): void {
        $this->name = $name;
    }
    public function getCity(): string {
        return $this->city;
    }
    public function setCity(string $city): void {
        $this->city = $city;
    }
}
