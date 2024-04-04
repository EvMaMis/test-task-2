<?php
require_once('classes/Dog.php');
class Mops extends Dog
{
    public function __construct()
    {
        $this->breed = 'Мопс';
    }

    public function hunt(): string
    {
        return "$this->breed має полювати, але йому лінь";
    }

    public function makeSound(): string
    {
        return "Гав-гав і ще дивні звуки від $this->breed";
    }
}