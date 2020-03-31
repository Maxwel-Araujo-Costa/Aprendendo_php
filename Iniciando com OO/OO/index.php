<?php

require_once("Car.php");
require_once("Motorcycle.php");

$ferrari = new Car("Ferrari", "Red");
//$ferrari->brand = "Ferrari";
//$ferrari->color = "Red";
$ferrari->engine = 488;
$ferrari->setDoors(2);

$mustang = new Car();
$mustang->brand = "Mustang";
$mustang->color = "Yellow";
$mustang->engine = 300;
$mustang->setDoors(4);

$m = new Motorcycle("Honda", "Blue");
$m->engine = 150;


//echo $ferrari->brand;

//var_dump($mustang);

//echo $mustang->getEngine("HP") . "<br>";

//echo "<br>" . $ferrari->color;
//echo "<br>" . $ferrari->getEngine();
//echo $m->getEngine() . "<br>";
//echo $ferrari->brand;
//echo $m->color;
//echo $mustang->color;

echo $mustang->getDoors();
