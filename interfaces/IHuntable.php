<?php


// Інтерфейс, що відповідає за здатність класу полювати
interface IHuntable
{
    public function hunt() : string;
}