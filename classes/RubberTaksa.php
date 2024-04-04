<?php

require_once('classes/ToyDog.php');
require_once('interfaces/ISoundable.php');
class RubberTaksa extends ToyDog implements ISoundable
{
    public function __construct()
    {
        $this->breed = 'Такса';
        $this->material = 'Резинова';
    }

    public function makeSound(): string
    {
        return "$this->material $this->breed пищить";
    }
}