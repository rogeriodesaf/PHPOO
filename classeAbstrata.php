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
}

class Dog extends Animal
{

}

$animal = new Dog();
$animal->setName('Ted ');
 print $animal->getName()."\n".$animal->run();

