<?php

require_once("classes/ToyDog.php");
class PlushLabrador extends ToyDog
{
    public function __construct()
    {
        $this->breed = 'Лабрадор';
        $this->material = 'Плюшевий';
    }
}