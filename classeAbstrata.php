<?php

abstract class Animal{
    private $name;

    public function run(){

        return "Animal is running";
    }
}

class Dog extends Animal
{

}


$animal = new Dog();
print $animal->run();
