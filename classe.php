<?php

class Car
{
    public $color;
    public $year;
    public $model;

    public function run()
    {
        return $this->model .'Car is running...';
    }
    public function stop()
    {
        return 'Car is stopping...';
    }
}

$car = new Car;
$car->color = 'Amarelo';
$car->year = '1990';
$car->model ='Mobi';

print $car->color;
print "\n";
print $car->year;
print "\n\n\n";
$car2 = new Car;
$car2->color ='Verde';
$car2->year = '2000';

print $car2->color.$car2->year."\n".$car2->run();
