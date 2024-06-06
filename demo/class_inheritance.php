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
//this is how to inherit properties and methods from the Car class.
Class Plane extends Car {
    // you can override the parents properties and methods e.g below
    var $wheels = 20
    //all properties and methods from car
}

$jet = new Plane();
$jet->MoveWheels();
echo $jet->wheels . "<br/>"; 

if(class_exists("Plane")) {
    echo "it does";
}

?>
