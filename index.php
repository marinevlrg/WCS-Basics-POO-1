<?php
// index.php

require './bicycle.php';
require './car.php';

$bike = new Bicycle(2,'blue', 1);
$bike->setCurrentSpeed(24);

var_dump($bike);

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
$bike->dump();



//CAR
$bluecar = new Car('blue', 4, 'diesel');
var_dump($bluecar);

echo $bluecar->setNbWheels(8) . '<br>';
echo $bluecar->getNbWheels() . '<br>';

echo $bluecar->getCurrentSpeed()  . '<br>';

echo $bluecar->setNbSeats(5) . '<br>';
echo $bluecar->getNbSeats() . '<br>';

echo $bluecar->setColor('black')  . '<br>';
echo $bluecar->getColor()  . '<br>';

echo $bluecar->setEnergy('electricity')  . '<br>';
echo $bluecar->getEnergy()  . '<br>';

echo $bluecar->setEnergyLevel(90)  . '<br>';
echo $bluecar->getEnergyLevel()  . '<br>';


$redcar = new Car('red', 5, 'gasoline');

var_dump($redcar);

echo $redcar->start();
var_dump($redcar);

echo $redcar->forward(50);
var_dump($redcar);

echo $redcar->forward(100);
var_dump($redcar);

echo $redcar->brake();
var_dump($redcar);

echo $redcar->setEnergyLevel(60);
var_dump($redcar);

echo $redcar->setEnergyLevel(110);
var_dump($redcar);




