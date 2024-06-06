<?php 
$connection = mysqli_connect('localhost', 'root', 'root', 'login app'); 

if($connection) {
    echo "We are connected";
} else {
    die("Database connection failed");
}
?>