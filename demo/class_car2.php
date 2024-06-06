<?php

//syntax of a class
// Object name starts with a capital letter. wont be considered a class if it has a lowercase
class Car {
// the code below is a method
    function MoveWheels(){
        echo "Wheels move";
    }

}

// checks if class exsists
if(class_exists("Car")) {
    echo "Class does exist.";
} else {
    echo "no..";
}

// checks if method exsists
if(method_exists("Car", "MoveWheels")) {
    echo "Method does exist.";
} else {
    echo "no..";
}
?>
