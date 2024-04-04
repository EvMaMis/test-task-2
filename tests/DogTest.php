<?php

namespace tests;

use PHPUnit\Framework\TestCase;

require_once("classes/ShibaInu.php");
require_once("classes/Mops.php");
require_once("classes/Taksa.php");


class DogTest extends TestCase
{
    public function testShibaInu() {
        $dog = new \ShibaInu();
        $this->assertEquals("Гав-гав від Сіба-Іну", $dog->makeSound());
        $this->assertEquals("Сіба-Іну вміє полювати", $dog->hunt());
    }

    public function testMops() {
        $dog = new \Mops();
        $this->assertEquals("Гав-гав і ще дивні звуки від Мопс", $dog->makeSound());
        $this->assertEquals("Мопс має полювати, але йому лінь", $dog->hunt());
    }

    public function testTaksa() {
        $dog = new \Taksa();
        $this->assertEquals("Гав-гав від Такса", $dog->makeSound());
        $this->assertEquals("Такса намагається полювати: її не видно у траві", $dog->hunt());
    }

    public function testPlushLabrador() {
        $realHunt = exec('php index.php plush-labrador hunt');
        $realSound = exec('php index.php plush-labrador sound');
        $this->assertEquals("Не може полювати", $realHunt);
        $this->assertEquals("Не може видавати звуки", $realSound);
    }

    public function testRubberTaksa() {
        $realHunt = exec('php index.php rubber-taksa hunt');
        $realSound = exec('php index.php rubber-taksa sound');
        $this->assertEquals("Не може полювати", $realHunt);
        $this->assertEquals("Резинова Такса пищить", $realSound);
    }
}