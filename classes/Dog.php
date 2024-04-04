<?php

require_once('interfaces/ISoundable.php');
require_once('interfaces/IHuntable.php');

abstract class Dog implements ISoundable, IHuntable
{
    protected $breed;
}