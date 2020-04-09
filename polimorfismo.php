<?php

abstract class Printer {
    public function toPrinter(){
    return 'hp printing date!!!';
    }

}
class hpPrinter extends Printer{
    public function toPrinter(){
        return 'hp printing date!!!';
    }

}
class brotherPrinter extends Printer{
    public function toPrinter(){
        return 'Brother printing date!!!';
    }

}

$hp = new hpPrinter();
print $hp-> toPrinter();

$brother = new brotherPrinter();
print("\n");
print $brother->toPrinter();