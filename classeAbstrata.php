<?php

abstract class Animal
{
    private $name;
    

    public function run()
        {
            return 'is running...';
        }

        public function getName()
        {
            return $this->name;
        }
        public function setName($name){
            $this->name = $name;
        }

        abstract public function sleep();
}

class Dog extends Animal
{
    public function sleep()
    {
        return 'Is sleeping...';
    }
}

$animal = new Dog();
$animal->setName('Ted ');
 print $animal->getName()."\n".$animal->sleep();

