<?php 
//name of th file
$file = "example.txt";

// the will run the fopen function and if the result is true it will run the code inside. in this case we are using 'r' for reading
if($handle = fopen($file, 'r')){

    // fread will grab the location of the file that was opened with $handle and the second parameters reads that file.
    //echo $content = fread($handle, 10); // each bite equals a character
    
    // a better way is to use a function called filesize as the second parameter
    echo $content = fread($handle, filesize($file));

    fclose($handle);
} else {
    echo "The app was not able to write on the file";
}


?>