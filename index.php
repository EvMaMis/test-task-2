<?php
require_once("classes/ShibaInu.php");
require_once("classes/Mops.php");
require_once("classes/Taksa.php");
require_once("classes/PlushLabrador.php");
require_once("classes/RubberTaksa.php");

if ($argc < 3) {
    echo "Будь ласка, використовуйте: php index.php <breed> <action>\n";
    exit(1);
}

$breed = strtolower($argv[1]);
$action = strtolower($argv[2]);

switch($breed) {
    case 'shiba-inu':
        $dog = new ShibaInu();
        break;
    case 'mops':
        $dog = new Mops();
        break;
    case 'taksa':
        $dog = new Taksa();
        break;
    case 'plush-labrador':
        $dog = new PlushLabrador();
        break;
    case 'rubber-taksa':
        $dog = new RubberTaksa();
        break;

    default:
        echo "Невідома порода \n";
        exit(1);
}

switch($action) {
    case 'sound':
        if($dog instanceof ISoundable) {
            echo $dog->makeSound() . "\n";
        } else {
            echo "Не може видавати звуки";
        }
        break;
    case 'hunt':
        if($dog instanceof IHuntable) {
            echo $dog->hunt() . "\n";
        } else {
            echo "Не може полювати";
        }
        break;
    default:
        echo "Невідома дія \n";
        exit(1);
}

