<?php

Class Animal
{
    public $name;

   
    public function sleep()
    {
        return $this->name ."  Está dormindo..." ;
    }

}

class Dog extends Animal
{
    public function sleep()
    {
        print parent::sleep();
        return 'Chandler está dormindo.';
    }
}

$dog = new Dog();
$dog->name = 'Joe';

print $dog->sleep();