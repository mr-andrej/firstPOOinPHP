<?php

// Starter.php

require_once 'car.php';
require_once 'bicycle.php';

$BMW = new Car("black", 5, "diesel");
$BMX = new Bicycle();

echo $BMW->start() . "<br>";
echo $BMW->forward() . "<br>";
echo $BMW->brake() . "<br>";

echo $BMX->forward() . "<br>";
echo $BMX->brake() . "<br>";


