<?php 

include 'db.php';

function showAllData() {
    //this will grab $connection from db.php
    global $connection;

    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die('query FAILED...');
    }

    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $username = $row['username'];
        echo "<option value='$id'> $id - $username </option>";
    }
}

function updateData(){
    
        //added this to be able to get the $connection from the other file
        global $connection;
    
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
    
        //this is the UPDATE QUERY this will check for Id and will change the username and password.
        $query = "UPDATE users SET ";
        $query .= "username = '$username', ";
        $query .= "password = '$password' ";
        $query .= "WHERE id = $id";
    
    
        $result = mysqli_query($connection, $query);
    
        if(!$result){
            // mysqli_error function will give you more information when you do a bad query/error.
            die("Query Failed" . mysqli_error($connection));
        }
    
}

function deleteData(){
    
    //added this to be able to get the $connection from the other file
    global $connection;

    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    //this is the UPDATE QUERY this will check for Id and will change the username and password.
    $query = "DELETE FROM users ";
    $query .= "WHERE id = $id";


    $result = mysqli_query($connection, $query);

    if(!$result){
        // mysqli_error function will give you more information when you do a bad query/error.
        die("Query Failed" . mysqli_error($connection));
    }

}

?>