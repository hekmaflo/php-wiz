<?php 
//name of th file
$file = "example.txt";

//function to open files, it takes two parameters, name of the file, and what to do. in this case 'w' stands for writing.

$handle = fopen($file, 'w');

//its good practice to close file since it might slow down a program if it dosent close. you can use the function below to do that
fclose($handle);

// the code above just works out of the box for windows, linux and mac based systems my need some modifications. 
?>