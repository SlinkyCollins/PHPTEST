<?php

// Using OOP, create at least 5 new instances of a class Fruit to describe in detail the different example of fruits we have.

class Fruit {

    public $name = '';
    public $color = '';

    public $texture = '';

    public function __construct($name, $color, $texture){
        echo 'This is '.$name .' and the color usually is '.$color. ' and it feels '.$texture;
    }

}

$fruitone = new Fruit('Mango', 'Green or Yellow', 'a bit hard');
echo "<br/>";
echo "<br/>";


$fruittwo = new Fruit('Cashew', 'Yellow Or Red Pink', 'soft');
echo "<br/>";
echo "<br/>";


$fruitthree = new Fruit('Pineapple', 'Green or Yellow', 'very rigid');
echo "<br/>";
echo "<br/>";


$fruitfour = new Fruit('Orange', 'OrangeYellow', 'very soft');
echo "<br/>";
echo "<br/>";



