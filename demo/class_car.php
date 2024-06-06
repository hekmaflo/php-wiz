<?php

//syntax of a class
// Object name starts with a capital letter. wont be considered a class if it has a lowercase
class Car {

}

// checks if class exsists
if(class_exists("Car")) {
    echo "Class does exist.";
} else {
    echo "no..";
}

?>
