<?php
require_once('classes/Dog.php');

class ShibaInu extends Dog
{
    public function __construct()
    {
        $this->breed = "Сіба-Іну";
    }

    public function makeSound(): string
    {
        return "Гав-гав від $this->breed";
    }
    public function hunt() : string {
        return "$this->breed вміє полювати";
    }

}