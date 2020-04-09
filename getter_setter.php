

       
<?php

class Carro
{
    private $model;
    private $year;
    private $color;

    public function getModel(){
        return $this->model;
    }
    public function setModel($model){
        $this->model = $model;
    }

        public function getYear(){
            return $this->year;
        }
    public function setYear($year)
    {
        $this->year = $year;
    }

    public function getColor(){
        return $this->color ;

    }
    public function setColor($color){
        $this->color = $color;
    }

}

$car1 = new Carro();
$car1->setModel('Fiat Mobi');
$car1->setYear(2020);
$car1->setColor('Branco');


print $car1->getModel();
print $car1->getYear();
print $car1->getColor();
