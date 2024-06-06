<?php

if(isset($_POST['submit'])) {
    $name = ["Hector", "Student", "Peter", "Mohad", "Maria"];
	$username = $_POST['user'];
	$password = $_POST['password'];
	echo $username;
	echo $password;

    if(strlen($username) < 5){
        echo "username has to be longer than 5 characters.";
    }

    if(strlen($username) > 10){
        echo "username cannot be longer than 10 characters.";
 
   }
   // thist will check against an array to see if there is a match. $username is the name inputed by user and $name is the array containing all the users.
   if(!in_array($username, $name)){
        echo "sorry you cannot log in...";
   } else {
        echo "welcome";
   }

}
