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


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="post">
    <input type="text" name="user" placeholder ="Enter Username">
    <input type="password" name= "password" placeholder ="Enter Password">
    <br>
    <input type="submit" name="submit">    </form>

</body>
</html>