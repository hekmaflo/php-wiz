<?php


class Car {
// the code below is how to create a static property
// a static property is attached to the calss and not the instance
    static $wheels = 4;
    var $hood = 1;


// for it to work you need to add public static
    public static function MoveWheels(){
        // to refer a static property you need to do the follwoing
        Car:: $wheels = 10;
    }

}



$bmw = new Car();

// echo bmw->wheels; // would not work since wheels is a static property.

// to access a static property you need to do the follwoing. 
echo Car::$wheels;

echo Car::MoveWheels();
?>
