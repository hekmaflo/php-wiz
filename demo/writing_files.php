<?php 
//name of th file
$file = "example.txt";

// the will run the fopen function and if the result is true it will run the code inside.
if($handle = fopen($file, 'w')){

    // fwrite will grab the location of the file with $handle and the second parameters writes to that file.
    fwrite($handle, "I love php");

    fclose($handle);
} else {
    echo "The app was not able to write on the file";
}


?>