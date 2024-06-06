<?php

//syntax of a class
// Object name starts with a capital letter. wont be considered a class if it has a lowercase
class Car {
//the code below is a property
    var $wheels = 4;
    var $hood = 1;
    var $engine= 1;
    var $doors = 4;

// the code below is a constructor
    function __construct(){
        //this keyword is used to reference the property inside the class.
        echo $this->wheels = 10;
    }
// constructur will run when a new object is created
}
// once bmw is created it will echo 10 due to the consturctor. 
$bmw = new Car();

?>
