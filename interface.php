<?php

interface Animal{
    public function sound();
    public function run();
}

class Dog implements Animal{

    public function sound(){
        return 'AU AU AU ';
    }
    public function run(){
        return 'Animal is running...';

    }
}

$animal = new Dog();
print $animal->run() ;
print "\n\n\n\n\n";
print $animal->sound();