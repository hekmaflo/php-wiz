<?php

//syntax of a class
// Object name starts with a capital letter. wont be considered a class if it has a lowercase
class Car {
//the code below is a property

// you are able to control data and you can use three different keywords below you'll see them

//public can be acessed anywhere
    public $wheels = 4;
//protected can be acessed only to this class and subclasses
    protected $hood = 1;
//private can only be accessed by this class.
    private $engine= 1;
    var $doors = 4;

// the code below is a constructor
    function showProperty(){
        //this keyword is used to reference the property inside the class.
        echo $this->hood;
    }
// constructur will run when a new object is created
}
// once bmw is created it will echo 10 due to the consturctor. 
$bmw = new Car();
//this will show $wheels which is 4
echo $bmw->wheels . "<br/>";
// this will show even if protected. 
$bmw->showProperty();

// this will not show since its protected
// echo $bmw->hood;

?>
