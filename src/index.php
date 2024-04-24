<?php

use App\Car\PassengerCar;
use App\Car\TruckCar;
use App\Enum\BodyTypeEnum;

require __DIR__ . './../vendor/autoload.php';

$mercedes = new PassengerCar();
$mercedes->bodyType = BodyTypeEnum::SEDAN;
$mercedes->capacity = 150;
$mercedes->doorsCount = 5;

$truck = new TruckCar();
$truck->capacity = 300;
$truck->bodyVolume = 5;

echo '<pre>';
echo '<h1>Легковой автомобиль</h1>';
print_r($mercedes);
echo '</pre>';

echo '<pre>';
echo '<h1>Грузовой автомобиль</h1>';
print_r($truck);
echo '</pre>';
