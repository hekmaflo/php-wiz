<?php

//syntax of a class
// Object name starts with a capital letter. wont be considered a class if it has a lowercase
class Car {
//the code below is a property
    var $wheels = 4;
    var $hood = 1;
    var $engine= 1;
    var $doors = 4;

// the code below is a method
    function MoveWheels(){
        //this keyword is used to reference the property inside the class.
        $this->wheels = 10;
    }

}

// how to instatiate a class

$bmw = new Car();

// bmw->MoveWheels(); would essentially run the method and change wheels to int of 10
// how to use the porperty
// we dont need the dollar sign on the property

echo $bmw->wheels;

//change the value of an existing property
$bmw->wheels = 8;

echo $bmw->wheels;

?>
