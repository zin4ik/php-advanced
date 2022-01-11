<?php
include 'MovableInterface.php';
include 'Car.php';

echo date('H:i:s') . PHP_EOL;

$vw = new Car();
echo $vw->start() . PHP_EOL;
echo $vw->up() . PHP_EOL;
echo $vw->down() . PHP_EOL;
echo $vw->up() . PHP_EOL;
echo $vw->stop() . PHP_EOL;