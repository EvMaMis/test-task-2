<?php

require_once('classes/Dog.php');

class Taksa extends Dog
{
    public function __construct()
    {
        $this->breed = 'Такса';
    }

    public function hunt(): string
    {
        return "$this->breed намагається полювати: її не видно у траві";
    }

    public function makeSound(): string
    {
        return "Гав-гав від $this->breed";
    }
}