<?php

// Інтерфейс, що відповідає за здатність класу видавати звуки
interface ISoundable
{
    public function makeSound() : string;
}