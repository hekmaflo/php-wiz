<?php

if(isset($_POST['submit'])){
    echo "yes we got it" . "<br/>";
    $username = $_POST['username'];
    $password = $_POST['password'];

   
    $connection = mysqli_connect('localhost', 'root', 'root', 'login app');

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $hashFormat = "$2y$10$";

    $salt = "iusesomecrazystrings22";

    $hashF_and_salt = $hashFormat . $salt;

    $password = crypt($password, $hashF_and_salt);

    if($connection) {
        echo "We are connected";
    } else {
        die("Database connection failed");
    }

    $query = "INSERT INTO users(username,password) ";
    $query .= "VALUES ('$username', '$password')";

    $result = mysqli_query($connection, $query);

    if(!$result) {
        die('query FAILED...');
    }

    // if ($username && $password){
    //     echo $username . "</br>" . $password;
    // } else {
    //     echo "forgot to input username or password...";
    // }
    
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
    <div class="container">
        <div class="col-sm-6">
            <form action="login_create.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input name="username" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input name="password"type="password" class="form-control">
                </div>
                <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>