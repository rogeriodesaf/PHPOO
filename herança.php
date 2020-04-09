<?php

class Animal{
    public $name;
    

    public function sleep(){
        return $this->name.' are sleeping ';
    }
}

class Dog extends Animal
{


}

class Bird extends Animal
{

}

$bird = new Bird();
$bird->name = 'Pato';

print $bird->sleep();

print"\n";

$dog = new Dog();
$dog->name = 'Snoopy';

print $dog->sleep();










?>
