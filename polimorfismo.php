<?php

interface Printer {
    public function toPrinter();

}
class hpPrinter implements Printer{
    public function toPrinter(){
        return 'hp printing date!!!';
    }

}
class brotherPrinter implements Printer{
    public function toPrinter(){
        return 'Brother printing date!!!';
    }

}

$hp = new hpPrinter();
print $hp-> toPrinter();

$brother = new brotherPrinter();
print("\n");
print $brother->toPrinter();